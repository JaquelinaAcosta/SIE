<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRkylkql\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRkylkql/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRkylkql.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRkylkql\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRkylkql\appDevDebugProjectContainer([
    'container.build_hash' => 'Rkylkql',
    'container.build_id' => '080a0820',
    'container.build_time' => 1565106447,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRkylkql');
