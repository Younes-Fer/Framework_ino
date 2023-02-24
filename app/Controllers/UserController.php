<?php

namespace App\Controllers;

use App\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        parent::view('contact', []);
    }
}

$user =  new UserController();

$user->index();
