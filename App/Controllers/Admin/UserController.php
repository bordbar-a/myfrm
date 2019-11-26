<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Models\User;
use App\Services\View\View;
use App\Utilities\FlashMessage;

class UserController
{
    private $userModel;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->userModel = new User();
    }

    public function list(Request $request)
    {
        $users = $this->userModel->read(['id' , 'name' , 'lastname' ,'email'  , 'role' , 'wallet' , 'updated_at'] );
        $data = array(
            'users' => $users,
        );
        View::load_from_base('admin.user.list', $data, 'admin');
    }

    public function add(Request $request)
    {
        View::load_from_base('admin.user.add', array(), 'admin');
    }

    public function save(Request $request)
    {
        $user = new User();
        if ($request->check_keys_exists('title|slug')) {
            $user = new User();

            $user->title = $request->title;
            $user->slug = $request->slug;

            $user->save();

        }
        if (!is_null($user->id)) {
            FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $user->id . 'اضافه شد ', FlashMessage::SUCCESS);
            Request::redirect('admin/user/list');
        }

        FlashMessage::add('دسته‌بندی مورد نظر اضافه نشد', FlashMessage::ERROR);
        Request::redirect('admin/user/list');
    }


    public function edit(Request $request)
    {
        $user = new User($request->id);
        $data = array(
            'user' => $user,
        );
        View::load_from_base('admin.user.edit', $data, 'admin');
    }

    public function update(Request $request)
    {
        $user = new User($request->id);
        if ($request->check_keys_exists('title|slug')) {

            $user->title = $request->title;
            $user->slug = $request->slug;
            $user->save();
            if ($user->affected_row) {
                FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $user->id . 'آپدیت شد ', FlashMessage::INFO);
                Request::redirect('admin/user/list');
            }
            FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $user->id . 'آپدیت نشد ', FlashMessage::WARNING);
            Request::redirect('admin/user/list');
        }


    }

    public function delete(Request $request)
    {
        $user = new User($request->id);
        $user->delete();
        if ($user->deleted_row) {
            FlashMessage::add('دسته‌بندی مورد نظر با آی دی ' . $user->deleted_row. ' حذف شد ', FlashMessage::ERROR);
            Request::redirect('admin/user/list');
        }
        echo "problem - occored in : " . where();
    }
}
