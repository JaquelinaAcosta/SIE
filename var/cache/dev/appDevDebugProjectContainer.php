<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCojlnbm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCojlnbm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCojlnbm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCojlnbm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerCojlnbm\appDevDebugProjectContainer([
    'container.build_hash' => 'Cojlnbm',
    'container.build_id' => '3c549f44',
    'container.build_time' => 1564761306,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCojlnbm');
