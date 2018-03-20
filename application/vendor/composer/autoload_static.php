<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7fde6afe5b246a514ea3fe01c6fc2c57
{
    public static $classMap = array (
        'Format' => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/application/libraries/Format.php',
        'REST_Controller' => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/application/libraries/REST_Controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7fde6afe5b246a514ea3fe01c6fc2c57::$classMap;

        }, null, ClassLoader::class);
    }
}
