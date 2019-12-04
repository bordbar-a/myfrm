<?php
/**
 * Created by PhpStorm.
 * User: Ali-PC
 * Date: 12/3/2019
 * Time: 12:03 PM
 */

namespace App\Services\Basket;


use App\Contracts\Facades\ProviderFacade;
use App\Services\Basket\Providers\SessionProvider;

class Basket extends ProviderFacade
{

    public static $provider;

    public static function setProvider()
    {
        self::$provider = SessionProvider::instance();
    }

}