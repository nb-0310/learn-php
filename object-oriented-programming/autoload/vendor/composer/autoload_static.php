<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0a60bfbea0b8d9cc8c1f23d50499891
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0a60bfbea0b8d9cc8c1f23d50499891::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0a60bfbea0b8d9cc8c1f23d50499891::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0a60bfbea0b8d9cc8c1f23d50499891::$classMap;

        }, null, ClassLoader::class);
    }
}
