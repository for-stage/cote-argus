<?php

$body = file_get_contents('php://input');

if(!$body)
{
      echo 'Cheating?';
      die();
}

header('Content-type: application/json');

$form = json_decode($body);

echo $form->sms;

// echo json_encode( 
    // $sms->sendSMS('+212681530508', 'Hi');

    // echo $ok;

// );
