<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHno2vhe\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHno2vhe/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHno2vhe.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHno2vhe\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerHno2vhe\appDevDebugProjectContainer([
    'container.build_hash' => 'Hno2vhe',
    'container.build_id' => 'be88fe9c',
    'container.build_time' => 1563366309,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHno2vhe');
