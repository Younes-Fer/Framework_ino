<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitea32c01e71e3142b3357a0ec7d0d8fb6
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitea32c01e71e3142b3357a0ec7d0d8fb6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitea32c01e71e3142b3357a0ec7d0d8fb6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitea32c01e71e3142b3357a0ec7d0d8fb6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
