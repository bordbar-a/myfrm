<?php

return array (

    '/' =>[
        'method' => 'get',
        'target' => 'HomeController@index',
        'middleware'=>'FirefoxBlocker'
    ],
    
    '/admin' =>[
        'method' => 'get|post',
        'target' => 'HomeController@index'
    ],
    '/first' =>[
        'method' => 'get|post',
        'target' => 'HomeController@index'
    ],
    '/secound' =>[
        'method' => 'get|post',
        'target' => 'HomeController@index'
    ],
    
);