<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Core\UploadedFile;
use App\Models\Category;
use App\Models\File;
use App\Models\Post;
use App\Services\View\View;
use App\Utilities\Content;
use App\Utilities\FlashMessage;

class FileController
{
    private $fileModel;
    private $categoryModel;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->fileModel = new File();
        $this->categoryModel = new Category();
    }

    public function list(Request $request)
    {
        $files = $this->fileModel->read();
        $categories = $this->categoryModel->read();
        $category_array = array();

        array_walk($categories, function ($item) {
            $category_array[$item->id] = $item->title;
        });


        foreach ($files as $file) {
            $file->description = Content::excerpt($file->description, 5);
            if ($file->category_id != 0) {
                $file->category_id = $category_array[$file->category_id] ?? $file->category_id;
            }
        }
        $data = array(
            'files' => $files,
        );
        View::load_from_base('admin.file.list', $data, 'admin');
    }

    public function add(Request $request)
    {
        $categories = $this->categoryModel->read();
        $data = array(
            'categories' => $categories,
        );
        View::load_from_base('admin.file.add', $data, 'admin');
    }

    public function save(Request $request)
    {
        $file_object = new UploadedFile('link');
        $thumb_image_Object = new UploadedFile('thumb');
        $file_url = '';
        $thumb_image_url = '';

        if ($file_object->save() && $thumb_image_Object->save()) {
            $file_url = $file_object->get_file_url();
            $thumb_image_url = $thumb_image_Object->get_file_url();
        } else {
            $file_object->destroy();
            $thumb_image_Object->destroy();
        }
        if ($request->check_keys_exists('type|title|description|category_id')) {
            $file = new File();
            $file->type = $request->type;
            $file->title = $request->title;
            $file->category_id = $request->category_id;
            $file->price = $request->price;
            $file->description = $request->description;
            $file->thumb = $thumb_image_url;
            $file->link = $file_url;
            $file->save();
            if ($file->id) {
                FlashMessage::add('فایل مورد نظر با آی دی ' . $file->id . ' اضافه شد ', FlashMessage::SUCCESS);
                Request::redirect('admin/file/list');
            }
        }
        FlashMessage::add('فایل مورد نظر اضافه نشد', FlashMessage::WARNING);
        Request::redirect('admin/file/list');
    }


    public function edit(Request $request)
    {

        $file = new File($request->id);
        $categories = $this->categoryModel->read();
        $data = array(
            'file' => $file,
            'categories' => $categories,
        );
        View::load_from_base('admin.file.edit', $data, 'admin');
    }

    public function update(Request $request)
    {
        $file = new File($request->id);
        $file_url = $file->link;
        $thumb_image_url = $file->thumb;


        $file_object = new UploadedFile('file');
        $thumb_image_Object = new UploadedFile('thumb');


        if ($file_object->save()) {
            $file_url = $file_object->get_file_url();

        }
        if ($thumb_image_Object->save()) {
            $thumb_image_url = $thumb_image_Object->get_file_url();
        }

        if ($request->check_keys_exists('type|title|description|category_id|price')) {

            $file->type = $request->type;
            $file->title = $request->title;
            $file->category_id = $request->category_id;
            $file->price = $request->price;
            $file->description = $request->description;
            $file->link = $file_url;
            $file->thumb = $thumb_image_url;
            $file->updated_at = get_date();

            $file->save();

            if ($file->affected_row) {
                FlashMessage::add('فایل مورد نظر با آی دی ' . $file->id . ' آپدیت شد ', FlashMessage::SUCCESS);
                Request::redirect('admin/file/list');
            }
            FlashMessage::add('فایل مورد نظر با آی دی ' . $request->id . ' آپدیت نشدااااااا ', FlashMessage::WARNING);
            Request::redirect('admin/file/list');
        }
        FlashMessage::add('فایل مورد نظر با آی دی ' . $request->id . ' آپدیت نشد ', FlashMessage::WARNING);
        Request::redirect('admin/file/list');
    }

    public function delete(Request $request)
    {

        $file = new File($request->id);
        $file->delete();
        if ($file->deleted_row) {
            FlashMessage::add('فایل مورد نظر با آی دی ' . $file->deleted_row . ' حذف شد ', FlashMessage::ERROR);
            Request::redirect('admin/file/list');
        }
        echo "problem - occored in : " . where();
    }
}
