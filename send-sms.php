<?php

require_once "vendor/autoload.php";

$basic  = new \Vonage\Client\Credentials\Basic("************", "*************");
$client = new \Vonage\Client($basic);

$response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS("94111223344", 'WEMIXT', 'A text message sent using the Nexmo SMS API')
);

$message = $response->current();

if ($message->getStatus() == 0) {
    echo "The message was sent successfully\n";
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}


?>