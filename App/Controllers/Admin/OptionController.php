<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Enums\OptionCategoryEnums;
use App\Models\Option;
use App\Services\View\View;
use App\Utilities\FlashMessage;

class OptionController
{
    private $optionModel;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->optionModel = new Option();
    }

    public function list(Request $request)
    {
        $options = $this->optionModel->read();
        $data = array(
            'options' => $options,
        );

        View::load_from_base('admin.option.list', $data, 'admin');
    }

    public function add(Request $request)
    {
        $optionCats = OptionCategoryEnums::OPTIONS_CATEGORIES;
        $data = array(
            'optionCats' => $optionCats,
        );
        View::load_from_base('admin.option.add', $data, 'admin');
    }

    public function save(Request $request)
    {
        $option = new Option();
        if ($request->check_keys_exists('key|value|category')) {
            $option = new Option();

            $option->key = $request->key;
            $option->value = $request->value;
            $option->category = $request->category;


            $option->save();

        }
        if (!is_null($option->id)) {
            FlashMessage::add('تنظیمات مورد نظر با آی دی ' . $option->id . 'اضافه شد ', FlashMessage::SUCCESS);
            Request::redirect('admin/option/list');
        }

        FlashMessage::add('تنظیمات مورد نظر اضافه نشد', FlashMessage::ERROR);
        Request::redirect('admin/option/list');
    }


    public function edit(Request $request)
    {
        $option = new Option($request->id);
        $data = array(
            'option' => $option,
        );
        View::load_from_base('admin.option.edit', $data, 'admin');
    }

    public function update(Request $request)
    {
        $option = new Option($request->id);
        if ($request->check_keys_exists('key|value|category')) {

            $option->key = $request->key;
            $option->value = $request->value;
            $option->category = $request->category;
            $option->save();
            if ($option->affected_row) {
                FlashMessage::add('تنظیمات مورد نظر با آی دی ' . $option->id . ' آپدیت شد ', FlashMessage::INFO);
                Request::redirect('admin/option/list');
            }
            FlashMessage::add('تنظیمات مورد نظر با آی دی ' . $option->id . ' آپدیت نشد ', FlashMessage::ERROR);
            Request::redirect('admin/option/list');
        }


    }

    public function delete(Request $request)
    {
        $option = new Option($request->id);
        $option->delete();
        if ($option->deleted_row) {
            FlashMessage::add('تنظیمات مورد نظر با آی دی ' . $option->deleted_row . ' حذف شد ', FlashMessage::ERROR);
            Request::redirect('admin/option/list');
        }
        echo "problem - occored in : " . where();
    }
}
