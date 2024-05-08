<?php

namespace App\Service;

use Twilio\Rest\Client;

class TwilioService
{
    private $client;
    private $twilioPhoneNumber;

    public function __construct(string $accountSid = 'AC1ce2aa96f5b80ccb9997673831ad0824', string $authToken = '0ef87fc89b12ee6a05547780550cb51b', string $twilioPhoneNumber = '+12565734856')
    {
        $this->client = new Client($accountSid, $authToken);
        $this->twilioPhoneNumber = $twilioPhoneNumber;
    }

    public function sendSms(string $to, string $message): void
    {
        $this->client->messages->create(
            $to,
            [
                'from' => $this->twilioPhoneNumber,
                'body' => $message
            ]
        );
    }
}
