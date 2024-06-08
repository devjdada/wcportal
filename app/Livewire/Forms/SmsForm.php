<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SmsForm extends Form
{


    public function sendTextMessage()
    {
        $username = 'johnsondada2@gmail.com';
        $password = 'Karis@0312';
        $sender   = 'wcphc';
        $mobiles = '07034100204';
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
}
