<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW6kr8xX\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW6kr8xX/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW6kr8xX.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW6kr8xX\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerW6kr8xX\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'W6kr8xX',
    'container.build_id' => '83037d80',
    'container.build_time' => 1645650910,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW6kr8xX');
