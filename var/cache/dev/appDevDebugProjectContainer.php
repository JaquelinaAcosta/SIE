<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYzqpxba\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYzqpxba/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYzqpxba.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYzqpxba\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerYzqpxba\appDevDebugProjectContainer([
    'container.build_hash' => 'Yzqpxba',
    'container.build_id' => '58b66396',
    'container.build_time' => 1565092946,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYzqpxba');
