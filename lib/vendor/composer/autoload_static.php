<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8f68ecf81f41984fcc539b6cecdd19b
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Epayco\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Epayco\\' => 
        array (
            0 => __DIR__ . '/..' . '/epayco/epayco-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8f68ecf81f41984fcc539b6cecdd19b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8f68ecf81f41984fcc539b6cecdd19b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita8f68ecf81f41984fcc539b6cecdd19b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
