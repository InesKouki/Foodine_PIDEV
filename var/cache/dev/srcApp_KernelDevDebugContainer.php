<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5ZYq8HI\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5ZYq8HI/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5ZYq8HI.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5ZYq8HI\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container5ZYq8HI\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '5ZYq8HI',
    'container.build_id' => 'e0920ad5',
    'container.build_time' => 1646769662,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5ZYq8HI');
