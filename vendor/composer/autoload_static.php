<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite59c98594cced3bb01c3cea69a26849d
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite59c98594cced3bb01c3cea69a26849d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite59c98594cced3bb01c3cea69a26849d::$classMap;

        }, null, ClassLoader::class);
    }
}
