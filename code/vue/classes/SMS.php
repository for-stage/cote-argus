<?php

namespace Classes;

// use Twilio\Exceptions\RestException;
use Twilio\Rest\Client;

class SMS
{

    public function sendSMS($phone, $message)
    {

            // Send an SMS using Twilio's REST API and PHP
            // $sid = "AC0fb595f5469a4104193924085718551d"; // Your Account SID from www.twilio.com/console
            // $token = "c61b7f1ff33ff1813e0b37c24c62883d"; // Your Auth Token from www.twilio.com/console
            // $twilio_number = '+19704657064'; // Your twilio number

            // $client = new Client($sid, $token);
            // $message = $client->messages->create(
            //     $phone, // Text this number
            //     array(
            //         'from' => $twilio_number, // From a valid Twilio number
            //         'body' => $message,
            //     )
            // );
            echo $phone;
            echo $message;

            if($message == "Hi"){
                $ok = "ok";
                return $ok;
            }


    }


}