<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRsxx8wP\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRsxx8wP/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRsxx8wP.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRsxx8wP\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRsxx8wP\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Rsxx8wP',
    'container.build_id' => 'c9b5f039',
    'container.build_time' => 1640035755,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRsxx8wP');
