<?php

namespace Config;

class App
{
    public static $baseUrlontroller = 'Controller.php';

    public static function getController($name)
    {

        $filename = 'app/Controllers/' . $name .self::$baseUrlontroller;

        if (file_exists($filename)) {
            require 'app/Controllers/' . $name . 'Controller.php';
        } else {
            require 'app/Views/404.view.php';
        }
    }
}
