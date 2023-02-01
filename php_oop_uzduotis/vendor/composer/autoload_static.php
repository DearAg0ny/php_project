<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fce31833356327cb37c86e69e9c472c
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IT\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IT\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fce31833356327cb37c86e69e9c472c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fce31833356327cb37c86e69e9c472c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fce31833356327cb37c86e69e9c472c::$classMap;

        }, null, ClassLoader::class);
    }
}