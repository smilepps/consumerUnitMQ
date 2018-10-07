<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'test.private_services_locator' shared service.

return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Command\\TestConsumerCommand' => function () {
    return ($this->services['console.command.public_alias.App\Command\TestConsumerCommand'] ?? $this->services['console.command.public_alias.App\Command\TestConsumerCommand'] = new \App\Command\TestConsumerCommand());
}, 'email_service' => function () {
    return ($this->privates['email_service'] ?? $this->load('getEmailServiceService.php'));
}, 'controller_name_converter' => function () {
    return ($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))));
}, 'controller_resolver' => function () {
    return ($this->privates['controller_resolver'] ?? $this->getControllerResolverService());
}, 'argument_metadata_factory' => function () {
    return ($this->privates['argument_metadata_factory'] ?? $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory());
}, 'argument_resolver' => function () {
    return ($this->privates['argument_resolver'] ?? $this->getArgumentResolverService());
}, 'argument_resolver.request_attribute' => function () {
    return ($this->privates['argument_resolver.request_attribute'] ?? $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver());
}, 'argument_resolver.request' => function () {
    return ($this->privates['argument_resolver.request'] ?? $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver());
}, 'argument_resolver.session' => function () {
    return ($this->privates['argument_resolver.session'] ?? $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver());
}, 'argument_resolver.service' => function () {
    return ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
}, 'argument_resolver.default' => function () {
    return ($this->privates['argument_resolver.default'] ?? $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver());
}, 'argument_resolver.variadic' => function () {
    return ($this->privates['argument_resolver.variadic'] ?? $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver());
}, 'response_listener' => function () {
    return ($this->privates['response_listener'] ?? $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
}, 'streamed_response_listener' => function () {
    return ($this->privates['streamed_response_listener'] ?? $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
}, 'locale_listener' => function () {
    return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
}, 'validate_request_listener' => function () {
    return ($this->privates['validate_request_listener'] ?? $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
}, 'resolve_controller_name_subscriber' => function () {
    return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
}, 'parameter_bag' => function () {
    return ($this->privates['parameter_bag'] ?? $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this));
}, 'file_locator' => function () {
    return ($this->privates['file_locator'] ?? $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), array(0 => ($this->targetDirs[3].'/src'))));
}, 'config_cache_factory' => function () {
    return ($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService());
}, 'dependency_injection.config.container_parameters_resource_checker' => function () {
    return ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this));
}, 'config.resource.self_checking_resource_checker' => function () {
    return ($this->privates['config.resource.self_checking_resource_checker'] ?? $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker());
}, 'console.error_listener' => function () {
    return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
}, 'console.command.about' => function () {
    return ($this->privates['console.command.about'] ?? $this->load('getConsole_Command_AboutService.php'));
}, 'console.command.assets_install' => function () {
    return ($this->privates['console.command.assets_install'] ?? $this->load('getConsole_Command_AssetsInstallService.php'));
}, 'console.command.cache_clear' => function () {
    return ($this->privates['console.command.cache_clear'] ?? $this->load('getConsole_Command_CacheClearService.php'));
}, 'console.command.cache_pool_clear' => function () {
    return ($this->privates['console.command.cache_pool_clear'] ?? $this->load('getConsole_Command_CachePoolClearService.php'));
}, 'console.command.cache_pool_prune' => function () {
    return ($this->privates['console.command.cache_pool_prune'] ?? $this->load('getConsole_Command_CachePoolPruneService.php'));
}, 'console.command.cache_pool_delete' => function () {
    return ($this->privates['console.command.cache_pool_delete'] ?? $this->load('getConsole_Command_CachePoolDeleteService.php'));
}, 'console.command.cache_warmup' => function () {
    return ($this->privates['console.command.cache_warmup'] ?? $this->load('getConsole_Command_CacheWarmupService.php'));
}, 'console.command.config_debug' => function () {
    return ($this->privates['console.command.config_debug'] ?? $this->load('getConsole_Command_ConfigDebugService.php'));
}, 'console.command.config_dump_reference' => function () {
    return ($this->privates['console.command.config_dump_reference'] ?? $this->load('getConsole_Command_ConfigDumpReferenceService.php'));
}, 'console.command.container_debug' => function () {
    return ($this->privates['console.command.container_debug'] ?? $this->load('getConsole_Command_ContainerDebugService.php'));
}, 'console.command.debug_autowiring' => function () {
    return ($this->privates['console.command.debug_autowiring'] ?? $this->load('getConsole_Command_DebugAutowiringService.php'));
}, 'console.command.event_dispatcher_debug' => function () {
    return ($this->privates['console.command.event_dispatcher_debug'] ?? $this->load('getConsole_Command_EventDispatcherDebugService.php'));
}, 'console.command.router_debug' => function () {
    return ($this->privates['console.command.router_debug'] ?? $this->load('getConsole_Command_RouterDebugService.php'));
}, 'console.command.router_match' => function () {
    return ($this->privates['console.command.router_match'] ?? $this->load('getConsole_Command_RouterMatchService.php'));
}, 'console.command.yaml_lint' => function () {
    return ($this->privates['console.command.yaml_lint'] ?? $this->load('getConsole_Command_YamlLintService.php'));
}, 'cache.default_clearer' => function () {
    return ($this->services['cache.app_clearer'] ?? $this->load('getCache_AppClearerService.php'));
}, 'test.client.history' => function () {
    return new \Symfony\Component\BrowserKit\History();
}, 'test.client.cookiejar' => function () {
    return new \Symfony\Component\BrowserKit\CookieJar();
}, 'test.session.listener' => function () {
    return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
}, 'session.storage.metadata_bag' => function () {
    return ($this->privates['session.storage.metadata_bag'] ?? $this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0'));
}, 'session.flash_bag' => function () {
    return ($this->privates['session.flash_bag'] ?? $this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
}, 'session.attribute_bag' => function () {
    return ($this->privates['session.attribute_bag'] ?? $this->privates['session.attribute_bag'] = new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag());
}, 'session.storage.mock_file' => function () {
    return ($this->privates['session.storage.mock_file'] ?? $this->load('getSession_Storage_MockFileService.php'));
}, 'session_listener' => function () {
    return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
}, 'debug.debug_handlers_listener' => function () {
    return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
}, 'debug.file_link_formatter' => function () {
    return ($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL));
}, 'routing.resolver' => function () {
    return ($this->privates['routing.resolver'] ?? $this->load('getRouting_ResolverService.php'));
}, 'routing.loader.xml' => function () {
    return ($this->privates['routing.loader.xml'] ?? $this->load('getRouting_Loader_XmlService.php'));
}, 'routing.loader.yml' => function () {
    return ($this->privates['routing.loader.yml'] ?? $this->load('getRouting_Loader_YmlService.php'));
}, 'routing.loader.php' => function () {
    return ($this->privates['routing.loader.php'] ?? $this->load('getRouting_Loader_PhpService.php'));
}, 'routing.loader.glob' => function () {
    return ($this->privates['routing.loader.glob'] ?? $this->load('getRouting_Loader_GlobService.php'));
}, 'routing.loader.directory' => function () {
    return ($this->privates['routing.loader.directory'] ?? $this->load('getRouting_Loader_DirectoryService.php'));
}, 'routing.loader.service' => function () {
    return ($this->privates['routing.loader.service'] ?? $this->privates['routing.loader.service'] = new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
}, 'router.default' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'router.request_context' => function () {
    return ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService());
}, 'router.cache_warmer' => function () {
    return ($this->privates['router.cache_warmer'] ?? $this->load('getRouter_CacheWarmerService.php'));
}, 'router_listener' => function () {
    return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
}, 'old_sound_rabbit_mq.anon_consumer_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.anon_consumer_command'] ?? $this->load('getOldSoundRabbitMq_AnonConsumerCommandService.php'));
}, 'old_sound_rabbit_mq.batch_consumer_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.batch_consumer_command'] ?? $this->load('getOldSoundRabbitMq_BatchConsumerCommandService.php'));
}, 'old_sound_rabbit_mq.consumer_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.consumer_command'] ?? $this->load('getOldSoundRabbitMq_ConsumerCommandService.php'));
}, 'old_sound_rabbit_mq.delete_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.delete_command'] ?? $this->load('getOldSoundRabbitMq_DeleteCommandService.php'));
}, 'old_sound_rabbit_mq.dynamic_consumer_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.dynamic_consumer_command'] ?? $this->load('getOldSoundRabbitMq_DynamicConsumerCommandService.php'));
}, 'old_sound_rabbit_mq.multiple_consumer_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.multiple_consumer_command'] ?? $this->load('getOldSoundRabbitMq_MultipleConsumerCommandService.php'));
}, 'old_sound_rabbit_mq.purge_consumer_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.purge_consumer_command'] ?? $this->load('getOldSoundRabbitMq_PurgeConsumerCommandService.php'));
}, 'old_sound_rabbit_mq.command.rpc_server_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.command.rpc_server_command'] ?? $this->load('getOldSoundRabbitMq_Command_RpcServerCommandService.php'));
}, 'old_sound_rabbit_mq.command.setup_fabric_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.command.setup_fabric_command'] ?? $this->load('getOldSoundRabbitMq_Command_SetupFabricCommandService.php'));
}, 'old_sound_rabbit_mq.command.std_in_producer_command' => function () {
    return ($this->privates['old_sound_rabbit_mq.command.std_in_producer_command'] ?? $this->load('getOldSoundRabbitMq_Command_StdInProducerCommandService.php'));
}, 'old_sound_rabbit_mq.connection_factory.default' => function () {
    return ($this->privates['old_sound_rabbit_mq.connection_factory.default'] ?? $this->load('getOldSoundRabbitMq_ConnectionFactory_DefaultService.php'));
}, 'swiftmailer.email_sender.listener' => function () {
    return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
}, 'swiftmailer.command.debug' => function () {
    return ($this->privates['swiftmailer.command.debug'] ?? $this->load('getSwiftmailer_Command_DebugService.php'));
}, 'swiftmailer.command.new_email' => function () {
    return ($this->privates['swiftmailer.command.new_email'] ?? $this->load('getSwiftmailer_Command_NewEmailService.php'));
}, 'swiftmailer.command.send_email' => function () {
    return ($this->privates['swiftmailer.command.send_email'] ?? $this->load('getSwiftmailer_Command_SendEmailService.php'));
}, 'swiftmailer.mailer.default.transport.eventdispatcher' => function () {
    return ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? $this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher());
}, 'swiftmailer.mailer.default.transport.null' => function () {
    return ($this->services['swiftmailer.mailer.default.transport.real'] ?? $this->load('getSwiftmailer_Mailer_Default_Transport_RealService.php'));
}, 'swiftmailer.mailer.default.spool.memory' => function () {
    return ($this->privates['swiftmailer.mailer.default.spool.memory'] ?? $this->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool());
}, 'swiftmailer.mailer.default.transport.spool' => function () {
    return ($this->privates['swiftmailer.mailer.default.transport.spool'] ?? $this->load('getSwiftmailer_Mailer_Default_Transport_SpoolService.php'));
}, 'logger' => function () {
    return ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger());
}, 'Psr\\Container\\ContainerInterface' => function () {
    return $this;
}, 'Symfony\\Component\\DependencyInjection\\ContainerInterface' => function () {
    return $this;
}, 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => function () {
    return ($this->privates['parameter_bag'] ?? $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this));
}, 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => function () {
    return ($this->privates['parameter_bag'] ?? $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this));
}, 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => function () {
    return ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService());
}, 'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => function () {
    return ($this->services['http_kernel'] ?? $this->getHttpKernelService());
}, 'Symfony\\Component\\HttpFoundation\\RequestStack' => function () {
    return ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
}, 'Symfony\\Component\\HttpKernel\\KernelInterface' => function () {
    return ($this->services['kernel'] ?? $this->get('kernel', 1));
}, 'Symfony\\Component\\Filesystem\\Filesystem' => function () {
    return ($this->services['filesystem'] ?? $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem());
}, 'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => function () {
    return ($this->privates['file_locator'] ?? $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), array(0 => ($this->targetDirs[3].'/src'))));
}, 'Psr\\Cache\\CacheItemPoolInterface' => function () {
    return ($this->services['cache.app'] ?? $this->load('getCache_AppService.php'));
}, 'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => function () {
    return ($this->services['cache.app'] ?? $this->load('getCache_AppService.php'));
}, 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => function () {
    return ($this->services['session'] ?? $this->load('getSessionService.php'));
}, 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => function () {
    return ($this->privates['session.storage.mock_file'] ?? $this->load('getSession_Storage_MockFileService.php'));
}, 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => function () {
    return ($this->privates['session.flash_bag'] ?? $this->privates['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
}, 'session.storage.filesystem' => function () {
    return ($this->privates['session.storage.mock_file'] ?? $this->load('getSession_Storage_MockFileService.php'));
}, 'session.storage' => function () {
    return ($this->privates['session.storage.mock_file'] ?? $this->load('getSession_Storage_MockFileService.php'));
}, 'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => function () {
    return ($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL));
}, 'Symfony\\Component\\Routing\\RouterInterface' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'Symfony\\Component\\Routing\\RequestContextAwareInterface' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'Symfony\\Component\\Routing\\RequestContext' => function () {
    return ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService());
}, 'swiftmailer.mailer.default.transport' => function () {
    return ($this->privates['swiftmailer.mailer.default.transport.spool'] ?? $this->load('getSwiftmailer_Mailer_Default_Transport_SpoolService.php'));
}, 'swiftmailer.mailer.default.spool' => function () {
    return ($this->privates['swiftmailer.mailer.default.spool.memory'] ?? $this->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool());
}, 'swiftmailer.spool' => function () {
    return ($this->privates['swiftmailer.mailer.default.spool.memory'] ?? $this->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool());
}, 'swiftmailer.transport.real' => function () {
    return ($this->services['swiftmailer.mailer.default.transport.real'] ?? $this->load('getSwiftmailer_Mailer_Default_Transport_RealService.php'));
}, 'Swift_Spool' => function () {
    return ($this->privates['swiftmailer.mailer.default.spool.memory'] ?? $this->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool());
}, 'swiftmailer.plugin.messagelogger' => function () {
    return ($this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger());
}, 'swiftmailer.mailer' => function () {
    return ($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php'));
}, 'swiftmailer.transport' => function () {
    return ($this->privates['swiftmailer.mailer.default.transport.spool'] ?? $this->load('getSwiftmailer_Mailer_Default_Transport_SpoolService.php'));
}, 'Swift_Mailer' => function () {
    return ($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php'));
}, 'Swift_Transport' => function () {
    return ($this->privates['swiftmailer.mailer.default.transport.spool'] ?? $this->load('getSwiftmailer_Mailer_Default_Transport_SpoolService.php'));
}, 'argument_resolver.controller_locator' => function () {
    return ($this->privates['.service_locator.9_yeNH1'] ?? $this->privates['.service_locator.9_yeNH1'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array()));
}, 'Psr\\Log\\LoggerInterface' => function () {
    return ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger());
}));
