<?php

namespace App\Contracts\Facades;


class ProviderFacade {


    public static function setProvider(){

        throw new \RuntimeException("Facade does not implement setProvider method");
    }



    public static function __callStatic($name, $arguments)
    {
        static::setProvider();
        return static::$provider->$name(...$arguments);
    }
}
