<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZPZXhxs\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZPZXhxs/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZPZXhxs.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZPZXhxs\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZPZXhxs\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZPZXhxs',
    'container.build_id' => '3ae4cc00',
    'container.build_time' => 1644773089,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZPZXhxs');
