<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHf6quob\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHf6quob/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHf6quob.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHf6quob\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerHf6quob\appDevDebugProjectContainer([
    'container.build_hash' => 'Hf6quob',
    'container.build_id' => 'e596ef7a',
    'container.build_time' => 1565200880,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHf6quob');
