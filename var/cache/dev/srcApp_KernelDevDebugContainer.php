<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPZi7yOT\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPZi7yOT/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPZi7yOT.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPZi7yOT\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPZi7yOT\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PZi7yOT',
    'container.build_id' => '1d18f7f6',
    'container.build_time' => 1646259730,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPZi7yOT');
