<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE3qVexA\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE3qVexA/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE3qVexA.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE3qVexA\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerE3qVexA\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'E3qVexA',
    'container.build_id' => '8af5cde3',
    'container.build_time' => 1646071574,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE3qVexA');
