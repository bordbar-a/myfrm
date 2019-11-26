<?php

namespace App\Middlewares;

use App\Middlewares\Contract\BaseMiddleware;
use App\Services\Auth\Auth;
use App\Services\View\View;

class AdminPanelGuard extends BaseMiddleware
{
    public function handle(\App\Core\Request $request)
    {
       if(!Auth::is_admin_user()){
           header('HTTP/1.1 403 Forbidden');
           View::load('errors.access_denied');
           die();
       }
    }
}
