<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUicylnw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUicylnw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerUicylnw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerUicylnw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerUicylnw\appDevDebugProjectContainer([
    'container.build_hash' => 'Uicylnw',
    'container.build_id' => '8a82c2ba',
    'container.build_time' => 1566387220,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUicylnw');
