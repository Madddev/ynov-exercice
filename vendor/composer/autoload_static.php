<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19c961f726446894dae6fa9682b814bf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19c961f726446894dae6fa9682b814bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19c961f726446894dae6fa9682b814bf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit19c961f726446894dae6fa9682b814bf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
