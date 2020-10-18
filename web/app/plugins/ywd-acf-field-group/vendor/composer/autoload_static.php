<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit456e6434f5d8cb46f3b5212d038ecba8
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YwdAcfFieldsGroup\\FieldsGroup\\' => 30,
            'YwdAcfFieldsGroup\\CustomField\\' => 30,
            'YwdAcfFieldsGroup\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YwdAcfFieldsGroup\\FieldsGroup\\' => 
        array (
            0 => __DIR__ . '/../..' . '/FieldsGroup',
        ),
        'YwdAcfFieldsGroup\\CustomField\\' => 
        array (
            0 => __DIR__ . '/../..' . '/CustomField',
        ),
        'YwdAcfFieldsGroup\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit456e6434f5d8cb46f3b5212d038ecba8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit456e6434f5d8cb46f3b5212d038ecba8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
