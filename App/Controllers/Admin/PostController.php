<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Models\Post;
use App\Services\View\View;
use App\Utilities\Content;

class PostController
{
    private $model;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->model = new Post();
    }
    
    public function list(Request $request)
    {
        $posts = $this->model->read();
   
        foreach ($posts as $post) {
            $post->content = Content::excerpt($post->content, 5);
        }
        $data= array(
            'posts' => $posts,
        );
        View::load_from_base('admin.Post.list', $data, 'layout-admin');
    }
    
    public function add(Request $request)
    {
        View::load_from_base('admin.post.add', array(), 'layout-admin');
    }

    public function save(Request $request)
    {
        if ($request->check_keys_exists('title|content|category_id')) {
            $model = new Post();
            $data = array(
            'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id,
             );
            $id = $model->create($data);
        }
        Request::redirect('admin/post/list');
    }

        
    public function edit(Request $request)
    {
        $post = $this->model->find_by_primary_key($request->id);
        $data= array(
            'post' => $post,
        );
        View::load_from_base('admin.post.edit', $data, 'layout-admin');
    }

    public function update(Request $request)
    {
        if ($request->check_keys_exists('title|content|category_id')) {

            $updatedPost= array(
                'title'=>$request->title,
                'content'=>$request->content,
                'category_id'=>$request->category_id,
                'updated_at'=>get_date(),
            );
            $this->model->update($updatedPost, ['id'=>$request->id]);
        }

        Request::redirect('admin/post/list');
    }
    public function delete(Request $request)
    {
        if ($this->model->delete(['id'=>$request->id]) == 1) {
            Request::redirect('admin/post/list');
        }
        echo "problem - occored in : " . where();
    }
}
