<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f3660b6f728a58a7e9b7525267b0ba2
{
    public static $classMap = array (
        'ComposerAutoloaderInit0f3660b6f728a58a7e9b7525267b0ba2' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit0f3660b6f728a58a7e9b7525267b0ba2' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Config\\Config' => __DIR__ . '/..' . '/Config/Config.php',
        'Modules\\AccessToken' => __DIR__ . '/..' . '/Modules/AccessToken.php',
        'Modules\\Account' => __DIR__ . '/..' . '/Modules/Account.php',
        'Modules\\Apps' => __DIR__ . '/..' . '/Modules/Apps.php',
        'Modules\\Board' => __DIR__ . '/..' . '/Modules/Board.php',
        'Modules\\Main' => __DIR__ . '/..' . '/Modules/Main.php',
        'VK' => __DIR__ . '/..' . '/VK.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0f3660b6f728a58a7e9b7525267b0ba2::$classMap;

        }, null, ClassLoader::class);
    }
}
