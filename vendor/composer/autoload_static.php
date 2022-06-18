<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb74d2696934ee6b5404819ab50a0bd86
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'utility\\' => 8,
        ),
        'c' => 
        array (
            'crud\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'utility\\' => 
        array (
            0 => '/src/utility',
        ),
        'crud\\' => 
        array (
            0 => '/src/crud',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb74d2696934ee6b5404819ab50a0bd86::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb74d2696934ee6b5404819ab50a0bd86::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
