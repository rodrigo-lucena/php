<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f30ad0d1ddb26c69b1a4453d8c0a2a0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f30ad0d1ddb26c69b1a4453d8c0a2a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f30ad0d1ddb26c69b1a4453d8c0a2a0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3f30ad0d1ddb26c69b1a4453d8c0a2a0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3f30ad0d1ddb26c69b1a4453d8c0a2a0::$classMap;

        }, null, ClassLoader::class);
    }
}
