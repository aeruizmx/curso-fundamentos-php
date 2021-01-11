<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b215f50892b199a5f2464603ef3b67c
{
    public static $files = array (
        '91b19c3a4a3192aa4d1be3c2b4a97a71' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b215f50892b199a5f2464603ef3b67c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b215f50892b199a5f2464603ef3b67c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b215f50892b199a5f2464603ef3b67c::$classMap;

        }, null, ClassLoader::class);
    }
}
