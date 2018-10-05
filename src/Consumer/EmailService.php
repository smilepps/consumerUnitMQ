<?php
namespace App\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Bundle\SwiftmailerBundle;

class EmailService implements ConsumerInterface
{
    /** @var ContainerInterface $container */
    protected $container;
    private $mailer;
    /**
     * @param ContainerInterface $container
     */
    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function execute(AMQPMessage $msg)
    {
        $body = $msg->body;
        //var_dump($body);
        //echo 'Recive message' . PHP_EOL;

        $response = json_decode($msg->body, true);

        $type = $response["type"];

        if ($type == "email") {
            $this->sendEmail($response);
        } else {
            //var_dump($response);
        }
    }

    private function sendEmail($response)
    {
        //echo 'Send to email' . PHP_EOL;
        $message = (new \Swift_Message($response['subject'], $response['message']))
            ->setFrom($response['from'])
            ->setTo($response['to']);
        $this->mailer->send($message);
    }
}
