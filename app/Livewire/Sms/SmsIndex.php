<?php

namespace App\Livewire\Sms;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class SmsIndex extends Component
{
    public function get_code()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.mtn.com/v1/oauth/access_token?grant_type=client_credentials",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "client_id=9xGLYOGFk7HAU94vdaxdF5yFUdAITQJI&client_secret=jWXMId024ctcdsEQ",
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/x-www-form-urlencoded"
            ],
        ]);

        dd(curl_exec($curl));
        $err = curl_error($curl);
    }

    public function sms_v1()
    {

        // Initialize a cURL session
        $curl = curl_init();

        // Define the data to be sent in JSON format
        $data = json_encode([
            "to" => [
                "+2347066548414"
            ],
            "body" => "Welcome to the Bozza network",
            "from" => "34001",
            "notificationURL" => "http://domian.co.za/callbackurl",
            "clientId" => env('MTN_CLIENT_ID')
        ]);

        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.mtn.com/v1/messages/sms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Authorization: Bearer " . env('MTN_API_TOKEN')
            ],
            CURLOPT_POSTFIELDS => $data
        ]);

        // Execute the cURL session
        $response = json_encode(curl_exec($curl));

        // Check for errors
        if (curl_errno($curl)) {

            dd('Error:' . curl_error($curl));
        } else {
            dd($response);
            // dd('Response:' . $response);
        }

        // Close the cURL session
        curl_close($curl);
    }

    public function sms_v2()
    {

        // Initialize a cURL session
        $curl = curl_init();

        // Define the data to be sent in JSON format
        $data = json_encode([
            "senderAddress" => "ILFCWWW",
            "receiverAddress" => ["2347066548414"],
            "message" => "string",
            "clientCorrelator" => env('MTN_CLIENT_ID')
        ]);

        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.mtn.com/v2/messages/sms/outbound",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Authorization: Bearer " . env('MTN_API_TOKEN') // Add the appropriate authorization token here
            ],
            CURLOPT_POSTFIELDS => $data
        ]);

        // Execute the cURL session
        $response = curl_exec($curl);

        // Check for errors
        if (curl_errno($curl)) {
            dd('Error:' . curl_error($curl));
        } else {
            dd('Response:' . $response);
        }

        // Close the cURL session
        curl_close($curl);
    }

    public function sms_v3()
    {
        $url = 'https://api.mtn.com/v3/sms/messages/sms/outbound';
        $headers = [
            'Authorization:  Bearer ' . env('MTN_API_KEY'),
            'Content-Type: application/json'
        ];

        $data = [
            "senderAddress" => "ILFCWWW",
            "receiverAddress" => [
                "2347066548414"
            ],
            "message" => "API Test v1",
            "clientCorrelatorId" =>   env('MTN_CLIENT_ID'),
            "keyword" => "string",
            "serviceCode" => "11221 or 131",
            "requestDeliveryReceipt" => false
        ];

        $options = [
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => json_encode($data)
        ];


        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            dd('Error:' . curl_error($ch));
        } else {
            dd('Response:' . $response);
        }

        curl_close($ch);
    }
    public function sms()
    {
        $mobiles = ['2347066548414'];
        $username = 'johnsondada2@gmail.com';
        $password = 'Karis@0312';
        $sender   = 'wcphc';
        $message  = 'Hope: This is a test message.';
        $api_url  = 'https://portal.nigeriabulksms.com/api/';


        $data = array('username' => $username, 'password' => $password, 'sender' => $sender, 'message' => $message, 'mobiles' => $mobiles);
        $data = http_build_query($data);
        $request = $api_url . '?' . $data;
        $result  = file_get_contents($request);
        dd($result);
        // echo $result;
        // if (isset($result->status) && strtoupper($result->status) == 'OK') {
        //     echo 'Message sent at N' . $result->price;
        // } else if (isset($result->error)) {
        //     echo 'Message failed - error: ' . $result->error;
        // } else {
        //     echo 'Unable to process request';
        // }
    }
    public function render()
    {
        return view('livewire.sms.sms-index');
    }
}
