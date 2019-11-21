<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Models\Category;
use App\Services\View\View;
use App\Utilities\FlashMessage;

class CategoryController
{
    private $categoryModel;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->categoryModel = new Category();
    }

    public function list(Request $request)
    {
        $categories = $this->categoryModel->read();
        $data = array(
            'categories' => $categories,
        );
        View::load_from_base('admin.category.list', $data, 'admin');
    }

    public function add(Request $request)
    {
        View::load_from_base('admin.category.add', array(), 'admin');
    }

    public function save(Request $request)
    {
        $category = new Category();
        if ($request->check_keys_exists('title|slug')) {
            $category = new Category();

            $category->title = $request->title;
            $category->slug = $request->slug;

            $category->save();

        }
        if (!is_null($category->id)) {
            FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $category->id . 'اضافه شد ', FlashMessage::SUCCESS);
            Request::redirect('admin/category/list');
        }

        FlashMessage::add('دسته‌بندی مورد نظر اضافه نشد', FlashMessage::ERROR);
        Request::redirect('admin/category/list');
    }


    public function edit(Request $request)
    {
        $category = new Category($request->id);
        $data = array(
            'category' => $category,
        );
        View::load_from_base('admin.category.edit', $data, 'admin');
    }

    public function update(Request $request)
    {
        $category = new Category($request->id);
        if ($request->check_keys_exists('title|slug')) {

            $category->title = $request->title;
            $category->slug = $request->slug;
            $category->save();
            if ($category->affected_row) {
                FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $category->id . 'آپدیت شد ', FlashMessage::INFO);
                Request::redirect('admin/category/list');
            }
            FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $category->id . 'آپدیت نشد ', FlashMessage::WARNING);
            Request::redirect('admin/category/list');
        }


    }

    public function delete(Request $request)
    {
        $category = new Category($request->id);
        $category->delete();
        if ($category->deleted_row) {
            FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $category->deleted_row. ' حذف شد ', FlashMessage::ERROR);
            Request::redirect('admin/category/list');
        }
        echo "problem - occored in : " . where();
    }
}
