<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYFbPHB0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYFbPHB0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYFbPHB0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYFbPHB0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYFbPHB0\App_KernelDevDebugContainer([
    'container.build_hash' => 'YFbPHB0',
    'container.build_id' => '79ffa159',
    'container.build_time' => 1645620371,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYFbPHB0');
