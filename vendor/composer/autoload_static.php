<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb378c87272aa6c0fa9a088bf67c73efe
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb378c87272aa6c0fa9a088bf67c73efe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb378c87272aa6c0fa9a088bf67c73efe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
