<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRuplyw0\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRuplyw0/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRuplyw0.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRuplyw0\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRuplyw0\appDevDebugProjectContainer([
    'container.build_hash' => 'Ruplyw0',
    'container.build_id' => 'f50ae562',
    'container.build_time' => 1561985019,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRuplyw0');
