<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit101544929bc739ebbec6e1225a2f8df0
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit101544929bc739ebbec6e1225a2f8df0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit101544929bc739ebbec6e1225a2f8df0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}