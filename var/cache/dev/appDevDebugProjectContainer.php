<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM7vh8tm\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM7vh8tm/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerM7vh8tm.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerM7vh8tm\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerM7vh8tm\appDevDebugProjectContainer([
    'container.build_hash' => 'M7vh8tm',
    'container.build_id' => '1b5c85b6',
    'container.build_time' => 1567690015,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM7vh8tm');
