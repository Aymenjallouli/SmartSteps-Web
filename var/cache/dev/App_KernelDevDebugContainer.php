<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQjTOVJH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQjTOVJH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQjTOVJH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQjTOVJH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQjTOVJH\App_KernelDevDebugContainer([
    'container.build_hash' => 'QjTOVJH',
    'container.build_id' => '71c6b95a',
    'container.build_time' => 1715188531,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQjTOVJH');
