<?php

namespace Database;

use PDO;

class Database
{
    protected static $instance;
    protected static $conn;
    protected function __construct()
    {
    }

    public static function getconnection()
    {
        $db_info = require './config/Database.php';
        extract($db_info);
        self::$conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname, $username, $password);
        echo 'HostName =' . $hostname . 'Dbname' . $dbname;
    }

    public static function connect()
    {
        self::getconnection();
        echo 'Connect with successufly';
    }
}
