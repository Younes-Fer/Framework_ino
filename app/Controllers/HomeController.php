<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        parent::view('Home', []);
    }
}

$about = new HomeController();
$about->index();
