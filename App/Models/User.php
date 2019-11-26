<?php

namespace App\Models;

use App\Models\Contract\BaseModel;

class User extends BaseModel
{
    public static $table_fields = array(
        'id',
        'name',
        'lastname',
        'email',
        'password',
        'phonenumber',
        'role',
        'wallet',
        'updated_at',
        'created_at',
        'remove_at',
    );
    public static $table = 'users';




    public function user_already_exists($email){
        $user = $this->get('*' , ['email'=>$email]);

        if($user){
            return true;
        }
        return false;
    }
}

