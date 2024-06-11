<?php

namespace App\Http\Controllers;

use App\Models\Homecell;
use App\Models\HomecellReport;
use App\Models\TextMessage as ModelsTextMessage;
use App\Models\User;
use Illuminate\Http\Request;

class TextMessage
{
    public function get_sms(Request $request)
    {

        $number = strtoupper($request->input('phone'));
        $message = strtoupper($request->input('text'));

        $hr = explode('WSF ', $message); // home cell report
        $sw = explode('SW ', $message); // soul wnng
        $cn = explode('CN ', $message); // covenant nameng
        $cd = explode('CD ', $message); // chllren dedcaton
        $nh = explode('NH ', $message); // new home cell locaton



        if ($hr[1]) {
            $male = 0;
            $female = 0;
            $children = 0;
            $timer = 0;
            $convert = 0;

            $text = explode(' ', $hr[1]);
            $sender = User::wherePhone($number)->first();
            if ($sender) {
                $user_id = $sender->id;
            } else {
                $user_id = '';
            }
            // return $text;
            foreach ($text as $msg) {

                if (substr($msg, 0, 1) == "H") {
                    $homecell = substr($msg, 1);
                    $cell = Homecell::whereId($homecell)->first();
                    $station_id = $cell->station_id;
                }
                if (substr($msg, 0, 1) == "M") {
                    $male = substr($msg, 1);
                }
                if (substr($msg, 0, 1) == "F") {
                    if (is_numeric(substr($msg, 1))) {
                        $female = substr($msg, 1);
                    }
                }
                if (substr($msg, 0, 1) == "C") {
                    $children = substr($msg, 1);
                }
                if (substr($msg, 0, 2) == "FT") {
                    $timer = substr($msg, 2);
                }
                if (substr($msg, 0, 2) == "NC") {
                    $convert = substr($msg, 2);
                }
            }
            $request['total'] = $children + $male + $female;
            $request['male'] =  $male;
            $request['female'] = $female;
            $request['children'] = $children;
            $request['first_timer'] = $timer;
            $request['new_convert'] = $convert;

            $request['user_id'] = $user_id;
            $request['station_id'] = $station_id;
            $request['homecell_id'] = $homecell;
            // TODO verfy the time of submtting the report
            if (date("w") == 6) {
                $request['week'] = date('Y-m-d',  strtotime("today"));
            } else {
                $request['week'] = date('Y-m-d',  strtotime("last saturday"));
            }
            if ($verifyReport = HomecellReport::whereWeek($request['week'])->whereHomecell_id($homecell)->first()) {
                $verifyReport->update($request->all());
                $this->save_sms($message, $number, $station_id, true);
                echo "OK";
                exit();
            }
            if ($homecellReport = HomecellReport::create($request->all())) {
                $this->save_sms($message, $number, $station_id, true);
                echo "OK";
                exit();
            }
        } elseif ($sw[1]) {
            $text = explode(' ', $sw[1]);
            foreach ($text as $msg) {
                if (strlen($msg) == 11 and is_numeric($msg)) {
                    $phone = $msg;
                } else {
                    $name[] =  $msg;
                }
            }
        } elseif ($cn[1]) {
        } elseif ($cd[1]) {
        } elseif ($nh[1]) {
        } else {
            $sender = User::wherePhone($number)->first();
            $this->save_sms($message, $number, $sender->station_id, true);
            echo 'OK';
        }



        echo 'OK';




        //must return "OK" or APP will consider message as failed

    }

    public function save_sms($msg, $phone, $station, $status)
    {
        $textMsg = new ModelsTextMessage();
        $textMsg->message = $msg;
        $textMsg->phone = $phone;
        $textMsg->station_id = $station;
        $textMsg->status = $status;
        $textMsg->save();
    }
}
