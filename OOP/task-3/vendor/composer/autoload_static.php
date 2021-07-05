<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdeda4c66996ef503dfad659ffb6e9ed9
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Classes\\Worker' => __DIR__ . '/../..' . '/app/Classes/Worker.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdeda4c66996ef503dfad659ffb6e9ed9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdeda4c66996ef503dfad659ffb6e9ed9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdeda4c66996ef503dfad659ffb6e9ed9::$classMap;

        }, null, ClassLoader::class);
    }
}
