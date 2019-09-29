<?php

namespace App\Middlewares;

use App\Middlewares\Contract\BaseMiddleware;

class FirefoxBlocker extends BaseMiddleware
{
    public function handle(\App\Core\Request $request)
    {
        $agentKey = 'Gecko/';
        if (strpos($request->agent, $agentKey) !== false) {
            echo "sorry - FireFox was Blocked ......";
            die();
        }
    }
}
