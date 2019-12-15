<?php


namespace App\Services\Auth\Providers;

use App\Services\Auth\Contract\AuthProvider;
use App\Utilities\FlashMessage;

class SessionProvider extends AuthProvider{

    const AUTH_KEY = 'auth';


    public function register(array $data)
    {
        if(!$this->is_valid_email($data['email'])){
            FlashMessage::add("ایمیل وارد شده صحیح نیست" , FlashMessage::WARNING);
            return false;
        }
        if(!$this->is_strong_password($data['password'])){
            FlashMessage::add("پسورد وارد شده قوی نیست" , FlashMessage::WARNING);
            return false;
        }


        if($this->userModel->user_already_exists($data['email'])){
            FlashMessage::add("با این ایمیل قبلا ثبت نام شده است." , FlashMessage::WARNING);
            return false;
        }

        $pass = $data['password'];

        $data['email'] = strtolower($data['email']);
        $data['password'] = $this->generate_hash($data['password']);

        $new_user = $this->userModel->create($data);

        if($new_user){
            FlashMessage::add("ثبت نام با موفقیت انجام شد" , FlashMessage::SUCCESS);
            $this->login($data['email'] , $pass);
            return $new_user;
        }

        FlashMessage::add("مشکلی در هنگام ثبت نام رخ داده است." , FlashMessage::ERROR);
        return false;
    }



    public function login($email, $password)
    {
        if(is_null($email) || is_null($password)){
            FlashMessage::add('ایمیل یا پسورد وارد نشده است', FlashMessage::ERROR);
            return 0;
        }
        $user = $this->userModel->get('*' , ['email'=>$email]);

        if(!$user){
            FlashMessage::add('ایمیل یا پسورد وارد شده اشتباه است', FlashMessage::ERROR);
            return 0;
        }

        if(!$this->is_varify_password($password , $user->password)){
            FlashMessage::add('ایمیل یا پسورد وارد شده اشتباه است', FlashMessage::ERROR);
            return 0 ;
        }

        $_SESSION[self::AUTH_KEY] = $user->id;
        FlashMessage::add('با موفقیت لاگین شدید', FlashMessage::SUCCESS);
        return $user->id;


    }

    public function is_login(): int
    {
       $user_id = $_SESSION[self::AUTH_KEY] ?? 0 ;
       return $user_id;
    }

    public function logout()
    {
        if($this->is_login()){
            unset($_SESSION[self::AUTH_KEY]);
            FlashMessage::add('با موفقیت خارج شدید', FlashMessage::INFO);
            return true;
        }
        return false;

    }

}