<?php

namespace App\Controllers;

use App\Core\Request;
use App\Services\View\View;

class HomeController {

    public function index(Request $request)
    {
        View::load('index', array() , 'themes');
    }
}