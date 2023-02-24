<?php

namespace App\Controllers;

use Config\View;

class Controller
{

    public function view(string $name, array $data = null)
    {
        echo View::view_page($name);
    }
}
