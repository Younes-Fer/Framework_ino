<?php

//echo 'VIEW Home';

define("PHP_NEW_LINE", "<br>");
define("PHP_SPACE", "&nbsp");
$favorites = array(
    "Dave Punk" => array(
        "mob" => "5689741523",
        "email" => "davepunk@gmail.com",
    ),
    "smith Punk" => array(
        "mob" => "2584369721",
        "email" => "montysmith@gmail.com",
    ),
    "John Flinch" => array(
        "mob" => "9875147536",
        "email" => "johnflinch@gmail.com",
    ),
    "admin super" => array(
        "mob" => "2345653016",
        "email" => "admin@gmail.com",
    )
);
echo count($favorites) . PHP_NEW_LINE;
echo count($favorites, 1) . PHP_NEW_LINE;

foreach ($favorites as $key => $value) {
    echo $key . str_repeat(PHP_SPACE, 2) . "=> [" . str_repeat(PHP_SPACE, 2) . PHP_NEW_LINE;
    foreach ($value as $k => $v) {
        echo str_repeat(PHP_SPACE, 5) . $k . str_repeat(PHP_SPACE, 2) . "=>" . str_repeat(PHP_SPACE, 2) . $v . PHP_NEW_LINE;
    }
    echo PHP_EOL . " ] " . PHP_NEW_LINE;
}
