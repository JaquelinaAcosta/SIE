<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVqbg88d\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVqbg88d/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVqbg88d.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVqbg88d\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVqbg88d\appDevDebugProjectContainer([
    'container.build_hash' => 'Vqbg88d',
    'container.build_id' => '960167fb',
    'container.build_time' => 1566921694,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVqbg88d');
