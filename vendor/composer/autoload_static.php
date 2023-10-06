<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit316d617f993f2bce437c7278b14ba7db
{
    public static $files = array (
        '2203a247e6fda86070a5e4e07aed533a' => __DIR__ . '/..' . '/symfony/clock/Resources/now.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Messenger\\' => 28,
            'Symfony\\Component\\Clock\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Clock\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Messenger\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/messenger',
        ),
        'Symfony\\Component\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/clock',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/clock/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit316d617f993f2bce437c7278b14ba7db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit316d617f993f2bce437c7278b14ba7db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit316d617f993f2bce437c7278b14ba7db::$classMap;

        }, null, ClassLoader::class);
    }
}