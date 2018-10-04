<?php
namespace App\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class EmailService implements ConsumerInterface
{
    public function execute(AMQPMessage $msg)
    {
        $body = $msg->body;
        //var_dump($body);

        $response = json_decode($msg->body, true);

        $type = $response["type"];

        if ($type == "email") {
            $this->sendEmail($response);
        }else{
            var_dump($response);
        }
    }

    private function sendEmail($response)
    {
        $message = (new \Swift_Message($response['subject'], $response['message']))
            ->setFrom($response['from'])
            ->setTo($response['to']);
        $mailer->send($message);
    }
}
