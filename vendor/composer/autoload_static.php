<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef07a5bd8deb518aa4bbdd888b9fba6c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ShuGlobal\\Core\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ShuGlobal\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef07a5bd8deb518aa4bbdd888b9fba6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef07a5bd8deb518aa4bbdd888b9fba6c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef07a5bd8deb518aa4bbdd888b9fba6c::$classMap;

        }, null, ClassLoader::class);
    }
}
