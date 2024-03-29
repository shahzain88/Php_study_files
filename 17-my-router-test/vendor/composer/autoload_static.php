<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94826b02676b859d2ed997c4ed14e1f8
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Shahzain\\17MyRouterTest\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Shahzain\\17MyRouterTest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit94826b02676b859d2ed997c4ed14e1f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94826b02676b859d2ed997c4ed14e1f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94826b02676b859d2ed997c4ed14e1f8::$classMap;

        }, null, ClassLoader::class);
    }
}
