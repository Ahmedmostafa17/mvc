<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68f08c64a1d3311e151ef61e8e64e8eb
{
    public static $files = array (
        'da253f61703e9c22a5a34f228526f05a' => __DIR__ . '/..' . '/wixel/gump/gump.class.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
        'G' => 
        array (
            'GUMP\\' => 5,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
        'GUMP\\' => 
        array (
            0 => __DIR__ . '/..' . '/wixel/gump/src',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68f08c64a1d3311e151ef61e8e64e8eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68f08c64a1d3311e151ef61e8e64e8eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68f08c64a1d3311e151ef61e8e64e8eb::$classMap;

        }, null, ClassLoader::class);
    }
}
