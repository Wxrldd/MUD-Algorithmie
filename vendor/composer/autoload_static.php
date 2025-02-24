<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2013be77ccd584644e27dea45a95528
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'J' => 
        array (
            'Jugid\\Staurie\\Example\\' => 22,
            'Jugid\\Staurie\\' => 14,
        ),
        'G' => 
        array (
            'Game\\Console\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Jugid\\Staurie\\Example\\' => 
        array (
            0 => __DIR__ . '/..' . '/jugid/staurie/example',
        ),
        'Jugid\\Staurie\\' => 
        array (
            0 => __DIR__ . '/..' . '/jugid/staurie/src',
        ),
        'Game\\Console\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite2013be77ccd584644e27dea45a95528::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2013be77ccd584644e27dea45a95528::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2013be77ccd584644e27dea45a95528::$classMap;

        }, null, ClassLoader::class);
    }
}
