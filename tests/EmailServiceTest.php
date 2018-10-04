<?php
// example.com/tests/Simplex/Tests/FrameworkTest.php
namespace Simplex\Tests;

//use PHPUnit\Framework\TestCase;
use App\Consumer\EmailService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use App\Command\TestConsumerCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
//use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmailServiceTest extends WebTestCase
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

    public function testSendEmail()
    {
        $client = static::createClient();
        // enables the profiler for the next request (it does nothing if the profiler is not available)
        $client->enableProfiler();

        (new EmailService())->execute(
                new \PhpAmqpLib\Message\AMQPMessage('{"type":"email", "to":"to@test.org", "from": "from@test.com", "subject": "Some subject", "message": "Hello world!"}')
        );

        $mailCollector = $client->getProfile()->getCollector('swiftmailer');

        // checks that an email was sent
        $this->assertSame(1, $mailCollector->getMessageCount());

        $collectedMessages = $mailCollector->getMessages();
        $message = $collectedMessages[0];

        // Asserting email data
        $this->assertSame('Some subject', $message->getSubject());
        $this->assertSame('from@test.com', key($message->getFrom()));
        $this->assertSame('to@test.org', key($message->getTo()));
        $this->assertSame('Hello world!', $message->getBody());
    }
}
