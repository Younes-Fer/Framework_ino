<?php 

namespace App\Controllers;

use App\Controllers\Controller;

class AboutController extends Controller{

    public function index(){
       // return View::view('About');
       parent::view('About',[]);
    }
}

$about = new AboutController();
$about->index();