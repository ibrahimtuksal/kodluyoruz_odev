<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDawz3W0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDawz3W0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDawz3W0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDawz3W0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDawz3W0\App_KernelDevDebugContainer([
    'container.build_hash' => 'Dawz3W0',
    'container.build_id' => 'c6da7ca2',
    'container.build_time' => 1616237987,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDawz3W0');