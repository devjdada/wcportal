<?php

namespace App\Http\Controllers;

use App\Models\HomecellReport;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SMS extends Controller
{
    public function send_sms($mobiles)
    {
        $username = 'johnsondada2@gmail.com';
        $password = 'Karis@0312';
        $sender   = 'wcphc';
        $message  = 'This is a test message.';
        $api_url  = 'https://portal.nigeriabulksms.com/api/';
        $api_token_bsm = 'lUOvW02u8sMXZJA4SpFt4U2JhR1hpZT2HmEAfgX4QX4qtUvdTmKlUvrYXm4R';
        $api_url_bulkSmsNigeria = 'https://www.bulksmsnigeria.com/api/v1/sms/create';



        $data_bsm = array('api_token' => $api_token_bsm, 'from' => $sender, 'to' => $mobiles, 'body' => $message, 'dnd' => 2);
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data_bsm)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($api_url_bulkSmsNigeria, false, $context);
        if ($result === FALSE) { /* Handle error */
        }

        return  $result;
    }



    public function receive_sms(Request $request)
    {
        $male = 0;
        $female = 0;
        $children = 0;

        $text = strtoupper($request->input('text'));

        $hr = explode('HR ', $text); // home cell report
        $sw = explode('SW ', $text); // soul wnng
        $cn = explode('CN ', $text); // covenant nameng
        $cd = explode('CD ', $text); // chllren dedcaton
        $nh = explode('NH ', $text); // new home cell locaton
        // return $hr[1];

        if ($hr[1]) {
            $text = explode(' ', $hr[1]);
            // return $text;
            foreach ($text as $msg) {
                if (substr($msg, 0, 1) == "H") {
                    $homecell = substr($msg, 1);
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
            $request['first_time'] = $timer;
            $request['new_convert'] = $convert;
            $request['user_id'] = 1;
            $request['homecell_id'] = $homecell;
            // TODO verfy the time of submtting the report
            if (date("w") == 6) {
                $request['week'] = date('Y-m-d',  strtotime("today"));
            } else {
                $request['week'] = date('Y-m-d',  strtotime("last saturday"));
            }
            if ($verifyReport = HomecellReport::whereWeek($request['week'])->whereHomecell_id($homecell)->first()) {
                $verifyReport->update($request->all());
                echo "OK";
                exit();
            }
            if ($homecellReport = HomecellReport::create($request->all())) {
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
        }








        //must return "OK" or APP will consider message as failed

    }
}
