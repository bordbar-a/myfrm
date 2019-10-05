<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Models\Category;
use App\Services\View\View;
use App\Utilities\FlashMessage;

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
        $categories = $this->model->read();
        $data= array(
            'categories' => $categories,
        );
        View::load_from_base('admin.category.list', $data, 'layout-admin');
    }
    
    public function add(Request $request)
    {
        View::load_from_base('admin.category.add', array(), 'layout-admin');
    }

    public function save(Request $request)
    {
        if ($request->check_keys_exists('title|slug')) {
            $model = new Category();
            $data = array(
            'title'=>$request->title,
            'slug'=>$request->slug,
             );
            $id = $model->create($data);
        }
     
        FlashMessage::add('دسته‌بندی مورد نظر اضافه شد', FlashMessage::SUCCESS);
     
        Request::redirect('admin/category/list');
    }

        
    public function edit(Request $request)
    {
        $category = $this->model->find_by_primary_key($request->id);
        $data= array(
            'category' => $category,
        );
        View::load_from_base('admin.category.edit', $data, 'layout-admin');
    }

    public function update(Request $request)
    {
        if ($request->key_exists('title') && $request->key_exists('slug')) {
            $data = ['title'=> $request->title,'slug'=>$request->slug];
            $where = ['id'=>$request->id];
            if ($this->model->update($data, $where) >0) {
                FlashMessage::add('آپدیت انجام شد' , FlashMessage::INFO);
                Request::redirect('admin/category/list');
            }
            FlashMessage::add('آپدیت انجام نشد' , FlashMessage::ERROR);
            Request::redirect('admin/category/list');
        }

       
    }
    public function delete(Request $request)
    {
        if ($this->model->delete(['id'=>$request->id]) == 1) {
            Request::redirect('admin/category/list');
        }
        echo "problem - occored in : " . where();
    }
}
