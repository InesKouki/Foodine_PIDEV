<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKBT6yAX\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKBT6yAX/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKBT6yAX.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKBT6yAX\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKBT6yAX\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KBT6yAX',
    'container.build_id' => '514db9ec',
    'container.build_time' => 1646861264,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKBT6yAX');
