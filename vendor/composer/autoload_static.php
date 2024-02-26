<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'App\\Controllers\\ProductController' => __DIR__ . '/../..' . '/app/Controllers/ProductController.php',
        'App\\Models\\Book' => __DIR__ . '/../..' . '/app/Models/Book.php',
        'App\\Models\\Disc' => __DIR__ . '/../..' . '/app/Models/Disc.php',
        'App\\Models\\Furniture' => __DIR__ . '/../..' . '/app/Models/Furniture.php',
        'App\\Models\\Product' => __DIR__ . '/../..' . '/app/Models/Product.php',
        'App\\Router' => __DIR__ . '/../..' . '/app/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf49b9b6409ee9bb672fca9bc8ff92838::$classMap;

        }, null, ClassLoader::class);
    }
}
