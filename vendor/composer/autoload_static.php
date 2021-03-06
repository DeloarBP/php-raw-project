<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfde88011a45b6866200ea689920c163d
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'AuthController' => __DIR__ . '/../..' . '/controllers/AuthController.php',
        'ComposerAutoloaderInitfde88011a45b6866200ea689920c163d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitfde88011a45b6866200ea689920c163d' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/HomeController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Session' => __DIR__ . '/../..' . '/core/Session.php',
        'UserController' => __DIR__ . '/../..' . '/controllers/UserController.php',
        'controller\\Controller' => __DIR__ . '/../..' . '/controllers/Controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfde88011a45b6866200ea689920c163d::$classMap;

        }, null, ClassLoader::class);
    }
}
