<?php

namespace App\Services\Auth;

use App\Contracts\Facades\ProviderFacade;
use App\Services\Auth\Providers\SessionProvider;




class Auth extends ProviderFacade{

    public static $provider = null;

    public static function setProvider()
    {
        self::$provider = SessionProvider::instance();
    }
}