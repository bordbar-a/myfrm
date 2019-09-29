<?php

namespace App\Middlewares;

use App\Middlewares\Contract\BaseMiddleware;

class IEBlocker extends BaseMiddleware
{
    public function handle(\App\Core\Request $request)
    {
        $agentKey = 'Trident/';
        if (stripos($request->agent, $agentKey) !== false) {
            echo "sorry - IE was Blocked ......";
            die();
        }
    }
}
