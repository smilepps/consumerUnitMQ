<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'old_sound_rabbit_mq.connection.default' shared service.

include_once $this->targetDirs[3].'/vendor/php-amqplib/php-amqplib/PhpAmqpLib/Channel/AbstractChannel.php';
include_once $this->targetDirs[3].'/vendor/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AbstractConnection.php';
include_once $this->targetDirs[3].'/vendor/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPStreamConnection.php';
include_once $this->targetDirs[3].'/vendor/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPConnection.php';

return $this->services['old_sound_rabbit_mq.connection.default'] = ($this->privates['old_sound_rabbit_mq.connection_factory.default'] ?? $this->load('getOldSoundRabbitMq_ConnectionFactory_DefaultService.php'))->createConnection();
