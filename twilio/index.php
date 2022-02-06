<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC4d19e7dbf3121f4ccba00ff876b85556';
$auth_token = 'b4a056e205a54fd532ae29cbfe0f892e';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+19034004246";

// Where to make a voice call (your cell phone?)
$to_number = "+19514568851";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);

header("Location: https://thinklove.tech/user");