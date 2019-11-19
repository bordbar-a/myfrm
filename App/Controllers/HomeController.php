<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Post;
use App\Services\View\View;

class HomeController {

    private $postModel;

    public function __construct()
    {
        $this->postModel = new Post();
    }

    public function index(Request $request)
    {
        $posts = $this->postModel->read();

        $data = array(
          'posts'=>$posts,
        );
        View::load('index', $data ,'themes');
    }
}