<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHegcjP6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHegcjP6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHegcjP6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHegcjP6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHegcjP6\App_KernelDevDebugContainer([
    'container.build_hash' => 'HegcjP6',
    'container.build_id' => '73ac2cba',
    'container.build_time' => 1729088271,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHegcjP6');