<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYKxUeMe\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYKxUeMe/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYKxUeMe.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYKxUeMe\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYKxUeMe\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YKxUeMe',
    'container.build_id' => '21475a9b',
    'container.build_time' => 1647952614,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYKxUeMe');
