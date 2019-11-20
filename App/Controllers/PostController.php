<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Post;
use App\Services\View\View;

class PostController {


    public function __construct()
    {

    }

    public function single(Request $request)
    {
        $post = new Post($request->id);
        $data = array(
            'post' => $post,
        );
        View::load('single.single' , $data , 'themes');
    }
}