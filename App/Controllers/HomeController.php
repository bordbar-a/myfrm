<?php

namespace App\Controllers;

use App\Core\Request;
use App\Services\View\View;

class HomeController {

    public function index(Request $request)
    {

        $array = array(
            'ali' => 'salam',
        );
        View::load('index', $array);
    }
}