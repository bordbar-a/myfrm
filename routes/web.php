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

    //category route 
    '/admin/category/list' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@list'
    ],
    '/admin/category/add' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@add'
    ],
    '/admin/category/save' =>[
        'method' => 'post',
        'target' => 'Admin\CategoryController@save'
    ],





// end of admin route
);