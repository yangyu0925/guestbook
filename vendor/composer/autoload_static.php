<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8405ec1ae4c0c938680210826938e04
{
    public static $files = array (
        '97166780ffa68b8923c8e451dd51b1f3' => __DIR__ . '/../..' . '/app/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8405ec1ae4c0c938680210826938e04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8405ec1ae4c0c938680210826938e04::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
