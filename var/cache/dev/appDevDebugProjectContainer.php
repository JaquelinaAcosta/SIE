<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTvxdku5\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTvxdku5/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTvxdku5.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTvxdku5\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerTvxdku5\appDevDebugProjectContainer([
    'container.build_hash' => 'Tvxdku5',
    'container.build_id' => '7f7c2152',
    'container.build_time' => 1561549576,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTvxdku5');
