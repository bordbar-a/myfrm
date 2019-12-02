<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\File;
use App\Models\Post;
use App\Services\View\View;

class FileController
{
    public $fileModel;

    public function __construct()
    {
        $this->fileModel = new File();
    }


    public function list(Request $request)
    {
        $files = $this->fileModel->read();
        $data = array(
            'files'=>$files,
        );
        View::load('file.list' , $data , 'themes');
    }


    public function action(Request $request)
    {
        die('_ok_');
    }


    public function single(Request $request){
        $file = new File($request->id);
        $data = array(
            'file' => $file,
        );

        if($file->id){
            View::load('single.file' , $data , 'themes');
            die();
        }
        View::load('errors.404');
    }
}