<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2c298eb1e6d8e9eead95ad4ca31834c
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'presty\\' => 7,
        ),
        'm' => 
        array (
            'moduleGuides\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'presty\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'moduleGuides\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/moduleGuides',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2c298eb1e6d8e9eead95ad4ca31834c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2c298eb1e6d8e9eead95ad4ca31834c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2c298eb1e6d8e9eead95ad4ca31834c::$classMap;

        }, null, ClassLoader::class);
    }
}