<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55b550c59f6dde7a38a16e7301e1cad4
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Derekcodes\\TurnstileLaravel\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Derekcodes\\TurnstileLaravel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit55b550c59f6dde7a38a16e7301e1cad4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55b550c59f6dde7a38a16e7301e1cad4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55b550c59f6dde7a38a16e7301e1cad4::$classMap;

        }, null, ClassLoader::class);
    }
}