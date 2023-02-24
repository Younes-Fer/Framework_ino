<?php

namespace Config;

class View
{
    public static $baseUrlView = '.view.php';
    public static function view_page($name_view)
    {
        $filename = 'app/Views/' . strtolower($name_view) . self::$baseUrlView;
        if (file_exists($filename)) {
            require 'app/Views/' . strtolower($name_view) . self::$baseUrlView;
        } else {
            require 'app/Views/404.view.php';
        }
    }
}
