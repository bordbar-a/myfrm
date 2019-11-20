<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Models\Tag;
use App\Services\View\View;
use App\Utilities\FlashMessage;

class TagController
{
    private $tagModel;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->tagModel = new Tag();
    }

    public function list(Request $request)
    {
        $tag = $this->tagModel->read();
        $data = array(
            'tags' => $tag,
        );
        View::load_from_base('admin.tag.list', $data, 'admin');
    }

    public function add(Request $request)
    {
        View::load_from_base('admin.tag.add', array(), 'admin');
    }

    public function save(Request $request)
    {
        $tag = new Tag();
        if ($request->check_keys_exists('title|slug')) {
            $tag = new Tag();

            $tag->title = $request->title;
            $tag->slug = $request->slug;

            $tag->save();

        }
        if (!is_null($tag->id)) {
            FlashMessage::add(' تگ مورد نظر با آی دی ' . $tag->id . ' اضافه شد', FlashMessage::SUCCESS);
            Request::redirect('admin/tag/list');
        }

        FlashMessage::add('تگ مورد نظر اضافه نشد', FlashMessage::ERROR);
        Request::redirect('admin/tag/list');
    }


    public function edit(Request $request)
    {
        $tag = new Tag($request->id);
        $data = array(
            'tag' => $tag,
        );
        View::load_from_base('admin.tag.edit', $data, 'admin');
    }

    public function update(Request $request)
    {
        $tag = new Tag($request->id);
        if ($request->check_keys_exists('title|slug')) {

            $tag->title = $request->title;
            $tag->slug = $request->slug;
            $tag->save();
            if ($tag->affected_row) {
                FlashMessage::add('آپدیت انجام شد', FlashMessage::INFO);
                Request::redirect('admin/tag/list');
            }
            FlashMessage::add('آپدیت انجام نشد', FlashMessage::ERROR);
            Request::redirect('admin/tag/list');
        }


    }

    public function delete(Request $request)
    {
        $tag = new Tag($request->id);
        $tag->delete();
        if ($tag->deleted_row) {
            FlashMessage::add('تگ مورد نظر با آی دی ' . $tag->deleted_row. ' حذف شد ', FlashMessage::ERROR);
            Request::redirect('admin/tag/list');
        }
        echo "problem - occored in : " . where();
    }
}
