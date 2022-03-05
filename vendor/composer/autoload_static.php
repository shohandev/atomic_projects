<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd3522e853cb780befcddb88c923558f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd3522e853cb780befcddb88c923558f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd3522e853cb780befcddb88c923558f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd3522e853cb780befcddb88c923558f::$classMap;

        }, null, ClassLoader::class);
    }
}
