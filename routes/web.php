<?php

return array (

    '' =>[
        'method' => 'get',
        'target' => 'HomeController@index',
        'middleware'=>'FirefoxBlocker'
    ],




// admin route 

    '/admin' =>[
        'method' => 'get|post',
        'target' => 'Admin\DashboardController@index'
    ],

// end of admin route
);