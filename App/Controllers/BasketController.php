<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\File;
use App\Models\Post;
use App\Services\Auth\Auth;
use App\Services\Basket\Basket;
use App\Services\View\View;

class BasketController
{

    private $fileModel;

    public function __construct()
    {
        $this->postModel = new Post();
    }

    public function add(Request $request)
    {

        $file = new File($request->file_id);
        if ($file) {

            $item = new \stdClass();

            $item->id = $file->id;
            $item->title = $file->title;
            $item->price = $file->price;
            $item->thumb = $file->thumb;
            $item->thumb = $file->thumb;
            if (Basket::add($item)) {
                $result = array(
                    'message' => 'سبد خرید آپدیت شد',
                    'cart' => get_widget('cart'),
                );

                die(json_encode($result));

            }
        }

    }


    public function reset(Request $request)
    {
        Basket::reset();
        echo get_widget('cart');

    }


    public function list(Request $request)
    {
        $data = array(
            'items' => Basket::items(),
            'total_price' => Basket::total_price(),
        );

        View::load('cart.shop', $data, 'themes' , false);
    }


    public function update(Request $request)
    {

        Basket::reset();
        $basket_items = array();
        $i = 0;
        foreach ($request->file_id as $item) {
            $basket_items[$item] = $request->qty[$i];
            $i++;
        }


        foreach ($basket_items as $id => $count) {
            $file = new File($id);
            $item = new \stdClass();
            $item->id = $file->id;
            $item->title = $file->title;
            $item->price = $file->price;
            $item->thumb = $file->thumb;
            $item->count = $count;
            Basket::add($item);
        }


        $data = array(
            'items' => Basket::items(),
        );
        Request::redirect('basket/list');
    }


    public function item_remove(Request $request)
    {
        if (Basket::is_exist_item_by_id($request->id)) {
            Basket::remove($request->id);
        }

        Request::redirect('basket/list');

    }

    public function checkout(Request $request)
    {

        $total_basket_price = Basket::total_price();
        $data = array(
            'total_price' => $total_basket_price,
        );
        View::load('cart.checkout', $data, 'themes', false, false, false);
    }


    public function register(Request $request)
    {

        if (!Auth::is_login()) {
            if ($request->user['password'] == $request->user['re-password']) {
                $user = array(
                    'name' => $request->user['name'],
                    'lastname' => $request->user['lastname'],
                    'email' => $request->user['email'],
                    'password' => $request->user['password'],
                    'phonenumber' => $request->user['phonenumber'],
                    'created_at' => get_date(),
                );

               $user_id =  Auth::register($user)->id;
            }

        }else{
            $user_id = Auth::is_login();
        }

        if(!$user_id){
            Request::redirect('basket/checkout');
        }







    }
}