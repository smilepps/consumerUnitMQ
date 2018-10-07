<?php
namespace App\Consumer;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

class EmailService implements ConsumerInterface
{
    /** @var ContainerInterface $container */
    protected $container;
    private $mailer;
    private $validator;
    /**
     * @param Swift_Mailer $mailer
     */
    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
        $this->validator = new EmailValidator();
    }

    public function execute(AMQPMessage $msg)
    {
        $body = $msg->body;
        //var_dump($body);
        //echo 'Recive message' . PHP_EOL;

        $response = json_decode($msg->body, true);

        $type = $response["type"];

        if ($type == "email") {
            if($this->checkStructure($response)){
                $this->sendEmail($response);
            } else {
                //throw new \Exceptionon('Invaliid strucure');
            }
        } else {
            //throw new \Exception('Unknow type message');
        }
    }

    /**
     * Отправка почты
     * @param array $data массив сообщения (subject,message,from,to)
     */
    private function sendEmail(array $data) : void
    {
        //echo 'Send to email' . PHP_EOL;
        $message = (new \Swift_Message($data['subject'], $data['message']))
            ->setFrom($data['from'])
            ->setTo($data['to']);
        $this->mailer->send($message);
    }
    
    /**
     * Проверка структуры
     * @param array $data массив сообщения (subject,message,from,to)
     */
    private function checkStructure(array $data) : bool
    {
        return
                $this->validator->isValid($data['to'], new RFCValidation()) &&
                $this->validator->isValid($data['from'], new RFCValidation()) &&
                !empty($data['subject']) &&
                !empty($data['message']);
    }
}
