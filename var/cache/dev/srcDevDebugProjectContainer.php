<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZxW1W7i\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZxW1W7i/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZxW1W7i.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZxW1W7i\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerZxW1W7i\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'ZxW1W7i',
    'container.build_id' => 'b6070219',
    'container.build_time' => 1538647597,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerZxW1W7i');