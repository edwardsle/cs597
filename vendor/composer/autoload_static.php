<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit885583abb06b83b12970bf2e0f8dafd2
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit885583abb06b83b12970bf2e0f8dafd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit885583abb06b83b12970bf2e0f8dafd2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit885583abb06b83b12970bf2e0f8dafd2::$classMap;

        }, null, ClassLoader::class);
    }
}
