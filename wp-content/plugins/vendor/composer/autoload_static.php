<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcddb08d7aeb0d12151279373c3ec735e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcddb08d7aeb0d12151279373c3ec735e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcddb08d7aeb0d12151279373c3ec735e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcddb08d7aeb0d12151279373c3ec735e::$classMap;

        }, null, ClassLoader::class);
    }
}
