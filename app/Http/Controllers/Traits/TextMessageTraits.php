<?php

namespace App\Http\Controllers\Traits;

/**
 *
 */
trait TextMessageTraits
{
    function sendTextMessage($mobiles)
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

    function sendTextCurl($mobiles)
    {
        $username = 'johnsondada2@gmail.com';
        $password = 'Karis@0312';
        $sender   = 'wcphc';
        $message  = 'This is a test message.';
        $api_url  = 'https://portal.nigeriabulksms.com/api/';


        $data = array('username' => $username, 'password' => $password, 'sender' => $sender, 'message' => $message, 'mobiles' => $mobiles);
        $data = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        $result = json_decode($result);
        if (isset($result->status) && strtoupper($result->status) == 'OK') {
            echo 'Message sent at N' . $result->price;
        } else if (isset($result->error)) {
            echo 'Message failed - error: ' . $result->error;
        } else {
            echo 'Unable to process request';
        }
    }

    function sendTextContent($mobiles)
    {
        $username = 'johnsondada2@gmail.com';
        $password = 'Karis@0312';
        $sender   = 'wcphc';
        $message  = 'Hope: This is a test message.';
        $api_url  = 'https://portal.nigeriabulksms.com/api/';


        $data = array('username' => $username, 'password' => $password, 'sender' => $sender, 'message' => $message, 'mobiles' => $mobiles);
        $data = http_build_query($data);
        $request = $api_url . '?' . $data;
        $result  = file_get_contents($request);
        // echo $result;
        // if (isset($result->status) && strtoupper($result->status) == 'OK') {
        //     echo 'Message sent at N' . $result->price;
        // } else if (isset($result->error)) {
        //     echo 'Message failed - error: ' . $result->error;
        // } else {
        //     echo 'Unable to process request';
        // }
    }
}
