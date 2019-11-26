<?php

namespace App\Services\Auth\Contract;

use App\Core\Request;
use App\Models\User;

abstract class AuthProvider
{

    public static $instance = null;
    public $userModel ;

    public static function instance(){
        if(is_null(static::$instance)){
            static::$instance = new static(new User());
        }
        return static::$instance;
    }

    protected function __construct(User $user)
    {
        $this->userModel = $user;
    }


    public abstract function register(array $data);

    public abstract function login($email, $password);

    public abstract function is_login(): int;

    public abstract function logout();






    public function generate_hash($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }


    public function generate_random_password()
    {

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();

        $pass_lenght = rand(8, 16);

        for ($i = 0; $i < $pass_lenght; $i++) {
            $index = rand(0, strlen($chars) - 1);
            $pass[] = $chars[$index];
        }

        return implode($pass);
    }


    public function is_valid_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function is_varify_password($password, $hash){
        return password_verify($password , $hash);
    }


    public function is_strong_password($password)
    {

        if (strlen($password) < 6) {
            return false;
        }
        return true;
    }


    public function is_admin_user()
    {
        $role = $this->userModel->get('role' , ['id'=>$this->is_login()]);
        return $role == "admin" ? true : false;

    }
}