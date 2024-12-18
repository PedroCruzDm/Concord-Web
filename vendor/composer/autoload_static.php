<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55a7abb024e8479260edecb918db3079
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Concord\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Concord\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit55a7abb024e8479260edecb918db3079::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55a7abb024e8479260edecb918db3079::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55a7abb024e8479260edecb918db3079::$classMap;

        }, null, ClassLoader::class);
    }
}
