<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5ybtad5\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5ybtad5/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container5ybtad5.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container5ybtad5\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container5ybtad5\appDevDebugProjectContainer([
    'container.build_hash' => '5ybtad5',
    'container.build_id' => 'db45bca4',
    'container.build_time' => 1568111485,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5ybtad5');
