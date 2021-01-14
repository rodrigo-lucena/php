<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37bea9a61cff12f69f980018d5e9a62c
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit37bea9a61cff12f69f980018d5e9a62c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit37bea9a61cff12f69f980018d5e9a62c::$classMap;

        }, null, ClassLoader::class);
    }
}
