<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUNxvQ00\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUNxvQ00/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUNxvQ00.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUNxvQ00\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUNxvQ00\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UNxvQ00',
    'container.build_id' => 'cfb4b9e1',
    'container.build_time' => 1646849197,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUNxvQ00');
