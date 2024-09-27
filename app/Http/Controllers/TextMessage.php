<?php

namespace App\Http\Controllers;

use App\Models\Assigned;
use App\Models\Homecell;
use App\Models\HomecellReport;
use App\Models\Soul;
use App\Models\TextMessage as ModelsTextMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TextMessage
{
    public function get_sms(Request $request)
    {
        $number = strtoupper($request->input('phone'));
        $message = strtoupper($request->input('text'));
        $user_id = 1;
        $sender = User::wherePhone($number)->first();

        // Parse different message types
        $hr = $this->parseMessage('WSF ', $message);
        $sw = $this->parseMessage('SW ', $message);
        $cn = $this->parseMessage('CN ', $message);
        $cd = $this->parseMessage('CD ', $message);
        $nh = $this->parseMessage('NH ', $message);

        if ($hr) {
            $this->processHomeCellReport($hr, $sender, $message, $number);
        } elseif ($sw) {
            $this->processSoulWinningReport($sw, $sender, $request);
        } elseif ($cn || $cd || $nh) {
            // Placeholder for CN, CD, NH handling
        } else {
            $this->save_sms($message, $number, $sender->station_id ?? null, false);
            echo 'OK';
        }

        // Must return "OK" or APP will consider the message failed
        echo 'OK';
    }

    private function parseMessage(string $prefix, string $message)
    {
        $explodedMessage = explode($prefix, $message);
        return $explodedMessage[1] ?? null;
    }

    private function processHomeCellReport($hr, $sender, $message, $number)
    {
        $homecellData = [
            'male' => 0,
            'female' => 0,
            'children' => 0,
            'timer' => 0,
            'convert' => 0,
            'user_id' => 1,  // Default user_id, updated later if sender is found
        ];

        $text = explode(' ', $hr);

        foreach ($text as $msg) {
            if (preg_match('/H(\d+)/', $msg, $matches)) {
                $homecell = $matches[1];
                $cell = Homecell::whereId($homecell)->first();
                $homecellData['station_id'] = $cell->station_id;
                $homecellData['homecell_id'] = $homecell;
            }
            $this->extractHomecellData($msg, $homecellData);
        }

        $homecellData['user_id'] = $sender->id ?? $homecellData['user_id'];
        $homecellData['total'] = $homecellData['children'] + $homecellData['male'] + $homecellData['female'];
        $homecellData['week'] = $this->getReportWeek();

        $this->saveHomecellReport($homecellData, $message, $number);
    }

    private function extractHomecellData($msg, &$homecellData)
    {
        if (preg_match('/M(\d+)/', $msg, $matches)) {
            $homecellData['male'] = $matches[1];
        } elseif (preg_match('/F(\d+)/', $msg, $matches)) {
            $homecellData['female'] = $matches[1];
        } elseif (preg_match('/C(\d+)/', $msg, $matches)) {
            $homecellData['children'] = $matches[1];
        } elseif (preg_match('/U(\d+)/', $msg, $matches)) {
            $homecellData['user_id'] = $matches[1];
        } elseif (preg_match('/FT(\d+)/', $msg, $matches)) {
            $homecellData['timer'] = $matches[1];
        } elseif (preg_match('/NC(\d+)/', $msg, $matches)) {
            $homecellData['convert'] = $matches[1];
        }
    }

    private function getReportWeek()
    {
        return (date("w") == 6) ? date('Y-m-d') : date('Y-m-d', strtotime("last saturday"));
    }

    private function saveHomecellReport($homecellData, $message, $number)
    {
        $existingReport = HomecellReport::whereWeek($homecellData['week'])
            ->whereHomecell_id($homecellData['homecell_id'])
            ->first();

        if ($existingReport) {
            $existingReport->update($homecellData);
        } else {
            HomecellReport::create($homecellData);
        }

        $this->save_sms($message, $number, $homecellData['station_id'], true);
        echo "OK";
        exit();
    }

    private function processSoulWinningReport($sw, $sender, Request $request)
    {
        $name = [];
        $phone = '';

        $text = explode(' ', $sw);
        foreach ($text as $msg) {
            if (strlen($msg) == 11 || $msg[0] == 0) {
                $phone = $msg;
            } else {
                $name[] = $msg;
            }
        }

        $user_id = $sender->id ?? 1;

        $soulData = [
            'soul_winner' => $user_id,
            'station_id' => $sender->station_id ?? null,
            'surname' => $name[0] ?? "",
            'firstname' => $name[1] ?? "",
            'phone' => $phone,
        ];

        if ($soul = Soul::create($soulData)) {
            $this->assignCallersToSoul($soul, $user_id);
        }
    }

    private function assignCallersToSoul($soul, $user_id)
    {
        $callers = User::where('caller_squad', true)
            ->where('id', '!=', $user_id)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        foreach ($callers as $caller) {
            if (!Assigned::where('contact_id', $soul->id)->where('assigned_to', $caller->id)->exists()) {
                if ($soul->soul_winner != $caller->id) {
                    Assigned::create([
                        'contact_id' => $soul->id,
                        'assigned_to' => $caller->id,
                        'station_id' => $caller->station_id,
                        'type' => 'soul',
                    ]);
                }
            }
        }
    }

    public function save_sms($msg, $phone, $station, $status)
    {
        ModelsTextMessage::create([
            'message' => $msg,
            'phone' => $phone,
            'station_id' => $station,
            'status' => $status,
        ]);
    }
}
