<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ7tycol\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ7tycol/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZ7tycol.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZ7tycol\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZ7tycol\appDevDebugProjectContainer([
    'container.build_hash' => 'Z7tycol',
    'container.build_id' => '4bd1c208',
    'container.build_time' => 1567006411,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ7tycol');
