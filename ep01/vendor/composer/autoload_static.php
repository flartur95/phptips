<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47d1bf783b0e1a9b480bffd53309a0c8
{
    public static $files = array (
        '70dd51eff566a25509cdc3c135bd8c7c' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47d1bf783b0e1a9b480bffd53309a0c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47d1bf783b0e1a9b480bffd53309a0c8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
