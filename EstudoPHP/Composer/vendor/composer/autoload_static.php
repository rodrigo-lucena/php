<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3c7bd25f4b5fadd37ad44172e50c933
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
            $loader->prefixesPsr0 = ComposerStaticInitb3c7bd25f4b5fadd37ad44172e50c933::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb3c7bd25f4b5fadd37ad44172e50c933::$classMap;

        }, null, ClassLoader::class);
    }
}
