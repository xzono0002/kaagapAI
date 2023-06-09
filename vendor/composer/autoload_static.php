<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12b4af700e19dfcdaba79f10369ac471
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit12b4af700e19dfcdaba79f10369ac471::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12b4af700e19dfcdaba79f10369ac471::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12b4af700e19dfcdaba79f10369ac471::$classMap;

        }, null, ClassLoader::class);
    }
}
