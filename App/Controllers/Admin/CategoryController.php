<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Models\Category;
use App\Services\View\View;

class CategoryController
{
    private $model;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->model = new Category();
    }
    
    public function list(Request $request)
    {
        $data= array(
            'categories' => $this->model->read()
        );
        View::load_from_base('admin.category.list', $data, 'layout-admin');
    }
    
    public function add(Request $request)
    {
        View::load_from_base('admin.category.add', array(), 'layout-admin');
    }




    public function save(Request $request)
    {
        
        $model = new Category();
        $data = array(
            'title'=>$request->title,
            'slug'=>$request->slug,
        );
        $id = $model->create($data);
        
        Request::redirect('admin/category/add');


    }
}
