<?php

namespace App\Utilities;

class Content{

    public static function excerpt($content , $wordcount , $postfix = '...'){
        $content = explode(" " , $content , $wordcount+1);
        unset($content[$wordcount]);
        return implode(" " , $content) . " {$postfix}";
       
    }
}