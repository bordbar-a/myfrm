<?php

return array (


//home route
    '/' =>[
        'method' => 'get',
        'target' => 'HomeController@index',
        'middleware'=>'FirefoxBlocker'
    ],

    '/single/post' => [
        'method' => 'get',
        'target' => 'PostController@single',
        'middleware' => ''
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
    '/admin/category/edit' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@edit'
    ],
    '/admin/category/update' =>[
        'method' => 'post',
        'target' => 'Admin\CategoryController@update'
    ],
    '/admin/category/delete' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@delete'
    ],

    //post route 
    '/admin/post/list' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@list'
    ],
    '/admin/post/add' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@add'
    ],
    '/admin/post/save' =>[
        'method' => 'post',
        'target' => 'Admin\PostController@save'
    ],
    '/admin/post/edit' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@edit'
    ],
    '/admin/post/update' =>[
        'method' => 'post',
        'target' => 'Admin\PostController@update'
    ],
    '/admin/post/delete' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@delete'
    ],

// end of admin route
);