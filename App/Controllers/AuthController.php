<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Post;
use App\Services\Auth\Auth;
use App\Services\View\View;
use App\Utilities\FlashMessage;

class AuthController {


    public function __construct()
    {

    }

    public function index(Request $request)
    {

        if(Auth::is_login()){
            Request::redirect();
        }

        $data = array(
            'newReferer'=>$request->referer,
        );

        View::load('auth.index' , $data , 'themes');
    }

    public function register(Request $request)
    {

        if(!$request->check_keys_exists('name|lastname|email|password|rePassword|phonenumber|ghanoon')){
            FlashMessage::add('موارد وارد شده کامل نیست',FlashMessage::ERROR);
            Request::redirect('auth');
        }

        if($request->password != $request->rePassword){
            FlashMessage::add('پسورد و تکرار آن یکی نیست',FlashMessage::ERROR);
            Request::redirect('auth');
        }
        $data = array(
          'name'=>$request->name,
          'lastname'=>$request->lastname,
          'email'=>$request->email,
          'password'=>$request->password,
          'phonenumber'=>$request->phonenumber,
          'news'=> ($request->news ? '1' : '0'),
        );

        if(!Auth::register($data)){
            $data['newReferer'] = $request->where;
            Request::redirect('auth');
            die();
        }
            $redirect = $request->where ?? '';
            Request::redirect($redirect);
    }



    public function login(Request $request){

        if(!$request->check_keys_exists('email|password')){
            FlashMessage::add('فرم کامل پر نشده است',FlashMessage::ERROR);
            Request::redirect('auth');
        }


        if(Auth::login($request->email,$request->password)){
            Request::redirect($request->where ?? '/');
        }
        Request::redirect('auth');



    }
    public function logout(Request $request){

        Auth::logout();
        Request::redirect($request->referer);
    }
}