<?php

namespace App\Controllers;

use App\Core\Request;

class HomeController {

    public function index(Request $request)
    {
        echo "i am in index method  in HomeController class";
    }
}