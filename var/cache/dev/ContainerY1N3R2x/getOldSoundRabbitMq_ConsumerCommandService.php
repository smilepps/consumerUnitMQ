<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'old_sound_rabbit_mq.consumer_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/php-amqplib/rabbitmq-bundle/Command/BaseRabbitMqCommand.php';
include_once $this->targetDirs[3].'/vendor/php-amqplib/rabbitmq-bundle/Command/BaseConsumerCommand.php';
include_once $this->targetDirs[3].'/vendor/php-amqplib/rabbitmq-bundle/Command/ConsumerCommand.php';

$this->privates['old_sound_rabbit_mq.consumer_command'] = $instance = new \OldSound\RabbitMqBundle\Command\ConsumerCommand();

$instance->setName('rabbitmq:consumer');

return $instance;
