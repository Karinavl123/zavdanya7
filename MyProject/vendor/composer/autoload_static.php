<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit793475f1c2122e344cf3e1dd7e972bb3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mycompany\\Myproject\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mycompany\\Myproject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/MyProject',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit793475f1c2122e344cf3e1dd7e972bb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit793475f1c2122e344cf3e1dd7e972bb3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit793475f1c2122e344cf3e1dd7e972bb3::$classMap;

        }, null, ClassLoader::class);
    }
}
