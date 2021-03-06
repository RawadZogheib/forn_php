<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d990e410c1571582bc1d015948540ae
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d990e410c1571582bc1d015948540ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d990e410c1571582bc1d015948540ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d990e410c1571582bc1d015948540ae::$classMap;

        }, null, ClassLoader::class);
    }
}
