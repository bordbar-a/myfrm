<?php

namespace App\Controllers\Admin;

use App\Core\Request;
use App\Core\UploadedFile;
use App\Models\Category;
use App\Models\Post;
use App\Services\View\View;
use App\Utilities\Content;
use App\Utilities\FlashMessage;

class PostController
{
    private $postModel;
    private $categoryModel;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->postModel = new Post();
        $this->categoryModel = new Category();
    }
    
    public function list(Request $request)
    {
        $posts = $this->postModel->read();
        $categories = $this->categoryModel->read();
        $category_array = array();
        foreach ($categories as $category){
            $category_array[$category->id] = $category->title;
        }
        foreach ($posts as $post) {
            $post->content = Content::excerpt($post->content, 5);
            if($post->category_id != 0){
                $post->category_id = $category_array[$post->category_id];
            }
        }
        $data= array(
            'posts' => $posts,

        );
        View::load_from_base('admin.Post.list', $data, 'admin');
    }
    
    public function add(Request $request)
    {
        $categories = $this->categoryModel->read();
        $data= array(
            'categories'=>$categories,
        );
        View::load_from_base('admin.post.add', $data , 'admin');
    }

    public function save(Request $request)
    {
        $imageObject = new UploadedFile('image');
        $thumb_imageObject = new UploadedFile('thumb_image');
        $image_url= '';
        $thumb_image_url= '';

        if($imageObject->save() && $thumb_imageObject->save()){
            $image_url = $imageObject->get_file_url();
            $thumb_image_url = $thumb_imageObject->get_file_url();
        }else{
            $imageObject->destroy();
            $thumb_imageObject->destroy();
        }
        if ($request->check_keys_exists('title|content|category_id')) {
            $postModel = new Post();
            $data = array(
            'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id,
            'thumb_image'=>$thumb_image_url,
            'image'=>$image_url,
             );
            $id = $postModel->create($data);
            if($id){
                FlashMessage::add( 'پست مورد نظر با آی دی ' .$id.' اضافه شد '  , FlashMessage::WARNING);
                Request::redirect('admin/post/list');
            }
        }
        FlashMessage::add('پست مورد نظر اضافه نشد' , FlashMessage::WARNING);
        Request::redirect('admin/post/list');
    }

        
    public function edit(Request $request)
    {

        $post = $this->postModel->find_by_primary_key($request->id);
        $categories = $this->categoryModel->read();
        $data= array(
            'post' => $post,
            'categories' => $categories,
        );
        View::load_from_base('admin.post.edit', $data, 'admin');
    }

    public function update(Request $request)
    {
        $image_url = $request->hidden_image;
        $thumb_image_url = $request->hidden_thumb;


        $imageObject = new UploadedFile('image');
        $thumb_imageObject = new UploadedFile('thumb_image');


        if($imageObject->save() && $thumb_imageObject->save()){
            $image_url = $imageObject->get_file_url();
            $thumb_image_url = $thumb_imageObject->get_file_url();
        }else{
            $imageObject->destroy();
            $thumb_imageObject->destroy();
        }



        if ($request->check_keys_exists('title|content|category_id')) {

            $updatedPost= array(
                'title'=>$request->title,
                'content'=>$request->content,
                'category_id'=>$request->category_id,
                'thumb_image'=>$thumb_image_url,
                'image'=>$image_url,
                'updated_at'=>get_date(),
            );
            $result = $this->postModel->update($updatedPost, ['id'=>$request->id]);
            if($result >= 1){
                FlashMessage::add( 'پست مورد نظر با آی دی ' . $request->id . ' آپدیت شد ' , FlashMessage::SUCCESS);
                Request::redirect('admin/post/list');
            }
        }
        FlashMessage::add('پست مورد نظر با آی دی ' . $request->id . ' آپدیت نشد ', FlashMessage::WARNING);
        Request::redirect('admin/post/list');
    }
    public function delete(Request $request)
    {
        if ($this->postModel->delete(['id'=>$request->id]) == 1) {
            FlashMessage::add('پست مورد نظر با آی دی ' . $request->id . ' حذف شد ', FlashMessage::WARNING);
            Request::redirect('admin/post/list');
        }
        echo "problem - occored in : " . where();
    }
}
