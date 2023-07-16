<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc366b1ce97058835d6fd04d7493659ec
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc366b1ce97058835d6fd04d7493659ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc366b1ce97058835d6fd04d7493659ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc366b1ce97058835d6fd04d7493659ec::$classMap;

        }, null, ClassLoader::class);
    }
}
