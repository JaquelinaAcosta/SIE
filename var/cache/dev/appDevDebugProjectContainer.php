<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKhhnjj0\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKhhnjj0/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKhhnjj0.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKhhnjj0\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerKhhnjj0\appDevDebugProjectContainer([
    'container.build_hash' => 'Khhnjj0',
    'container.build_id' => 'b3276f97',
    'container.build_time' => 1567599391,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKhhnjj0');
