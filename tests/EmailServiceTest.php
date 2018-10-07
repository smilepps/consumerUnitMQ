<?php
namespace Simplex\Tests;

use App\Consumer\EmailService;
use App\Command\TestConsumerCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use OldSound\RabbitMqBundle\RabbitMq\AMQPConnectionFactory;
use OldSound\RabbitMqBundle\Tests\RabbitMq\Fixtures\AMQPConnection;

class EmailServiceTest extends KernelTestCase
{
    public function testSendJsonInRabbit()
    {
        $kernel = self::bootKernel();
        $application = new Application($kernel);

        $application->add(new TestConsumerCommand());

        $command = $application->find('app:test-consumer');
        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command'  => $command->getName(),
        ));

        // the output of the command in the console
        $output = $commandTester->getDisplay();
        $this->assertContains('Message sended', $output);
    }
    
    /**
     * @dataProvider provider
     */
    public function testSendEmail($key, $data)
    {
        // container
        $container = self::bootKernel()->getContainer();

        // register swiftmailer logger
        $mailer = $container->get('mailer');
        $logger = new \Swift_Plugins_MessageLogger();
        $mailer->registerPlugin($logger);
        
        (new EmailService($mailer))->execute(
                new \PhpAmqpLib\Message\AMQPMessage($data)
        );

        if($key == 'isGood'){
            // checks that an email was sent
            $this->assertSame(1, $logger->countMessages());

            $collectedMessages = $logger->getMessages();
            $message = $collectedMessages[0];

            // Asserting email data
            $this->assertSame('Some subject', $message->getSubject());
            $this->assertSame('from@test.com', key($message->getFrom()));
            $this->assertSame('to@test.org', key($message->getTo()));
            $this->assertSame('Hello world!', $message->getBody());
        }else{
            $this->assertSame(0, $logger->countMessages());
        }
    }
    
    public function provider()
    {
        yield ['isGood', '{"type":"email", "to":"to@test.org", "from": "from@test.com", "subject": "Some subject", "message": "Hello world!"}'];
        yield ['isBad', '{"type":"email", "to":"", "from": "from@test.com", "subject": "Some subject", "message": "Hello world!"}'];
        yield ['Empty', ''];
    }
    
}
