<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc4249ec25d33a92de64542e6f93ddab
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitbc4249ec25d33a92de64542e6f93ddab::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitbc4249ec25d33a92de64542e6f93ddab::$classMap;

        }, null, ClassLoader::class);
    }
}