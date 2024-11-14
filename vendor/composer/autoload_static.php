<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd64fc24efaed2df4f2f230227fea08b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\' => 12,
        ),
        'E' => 
        array (
            'EasyLog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\' => 
        array (
            0 => __DIR__ . '/..' . '/imafaz/neili/src',
        ),
        'EasyLog\\' => 
        array (
            0 => __DIR__ . '/..' . '/imafaz/easylog/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd64fc24efaed2df4f2f230227fea08b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd64fc24efaed2df4f2f230227fea08b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd64fc24efaed2df4f2f230227fea08b::$classMap;

        }, null, ClassLoader::class);
    }
}
