<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDfxcegn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDfxcegn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDfxcegn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDfxcegn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDfxcegn\appDevDebugProjectContainer([
    'container.build_hash' => 'Dfxcegn',
    'container.build_id' => '29ee83a2',
    'container.build_time' => 1562154082,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDfxcegn');
