<?php

namespace Bootstrap;

use Config\App;
use Database\Database;

class Application
{
    /**
     * 
     * Class global application run
     * 
     */

    public function __construct()
    {
    }


    /**
     * 
     * function run application
     * @return void
     */

    public static function run()
    {
        // Controller 
        $url = $_GET['path'] ?? 'Home';
        App::getController($url);

        // Run Database 

        Database::connect();
    }
}
