<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBixyqwh\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBixyqwh/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerBixyqwh.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerBixyqwh\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerBixyqwh\appDevDebugProjectContainer([
    'container.build_hash' => 'Bixyqwh',
    'container.build_id' => '12beb544',
    'container.build_time' => 1564501303,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBixyqwh');
