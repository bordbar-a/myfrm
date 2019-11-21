<?php

namespace App\Utilities;

class Option {

    public static function get($key){

        $objectModel = new \App\Models\Option();
        return $objectModel->get('value' , ['key'=>$key]) ?? '' ;

    }
}