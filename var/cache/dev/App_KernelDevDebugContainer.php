<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN4hbHLr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN4hbHLr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN4hbHLr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN4hbHLr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN4hbHLr\App_KernelDevDebugContainer([
    'container.build_hash' => 'N4hbHLr',
    'container.build_id' => '678b934a',
    'container.build_time' => 1635234297,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN4hbHLr');
