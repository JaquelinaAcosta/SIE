<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC7rpkxs\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC7rpkxs/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerC7rpkxs.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerC7rpkxs\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerC7rpkxs\appDevDebugProjectContainer([
    'container.build_hash' => 'C7rpkxs',
    'container.build_id' => 'be71b531',
    'container.build_time' => 1566476265,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC7rpkxs');
