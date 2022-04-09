<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1ce8ffacf7ff9477dbc441d5248b6aa
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1ce8ffacf7ff9477dbc441d5248b6aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1ce8ffacf7ff9477dbc441d5248b6aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1ce8ffacf7ff9477dbc441d5248b6aa::$classMap;

        }, null, ClassLoader::class);
    }
}