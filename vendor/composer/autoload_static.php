<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9268273d834dfdf77e84a3b2ba16b4fb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9268273d834dfdf77e84a3b2ba16b4fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9268273d834dfdf77e84a3b2ba16b4fb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
