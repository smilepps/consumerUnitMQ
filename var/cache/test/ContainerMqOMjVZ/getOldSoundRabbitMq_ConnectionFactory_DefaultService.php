<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'old_sound_rabbit_mq.connection_factory.default' shared service.

include_once $this->targetDirs[3].'/vendor/php-amqplib/rabbitmq-bundle/RabbitMq/AMQPConnectionFactory.php';

return $this->privates['old_sound_rabbit_mq.connection_factory.default'] = new \OldSound\RabbitMqBundle\RabbitMq\AMQPConnectionFactory('PhpAmqpLib\\Connection\\AMQPConnection', array('host' => 'localhost', 'port' => 5672, 'user' => 'guest', 'password' => 'guest', 'vhost' => '/', 'url' => '', 'lazy' => false, 'connection_timeout' => 3, 'read_write_timeout' => 3, 'use_socket' => false, 'ssl_context' => array(), 'keepalive' => false, 'heartbeat' => 0));
