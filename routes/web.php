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


    '/auth' =>[
        'method'=>'get',
        'target'=>'AuthController@index',
    ],
    '/auth/register' => [
        'method' => 'post',
        'target' => 'AuthController@register',
    ],

    '/auth/login' => [
        'method' => 'post',
        'target' => 'AuthController@login',
    ],

    '/auth/logout' => [
        'method' => 'get',
        'target' => 'AuthController@logout',
    ],





// admin route 

    '/admin' =>[
        'method' => 'get|post',
        'target' => 'Admin\DashboardController@index',
        'middleware'=>'IsAdmin'
    ],

    
    //category route 
    '/admin/category/list' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@list',
        'middleware'=>'IsAdmin'
    ],
    '/admin/category/add' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@add',
        'middleware'=>'IsAdmin'
    ],
    '/admin/category/save' =>[
        'method' => 'post',
        'target' => 'Admin\CategoryController@save',
        'middleware'=>'IsAdmin'
    ],
    '/admin/category/edit' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@edit',
        'middleware'=>'IsAdmin'
    ],
    '/admin/category/update' =>[
        'method' => 'post',
        'target' => 'Admin\CategoryController@update',
        'middleware'=>'IsAdmin'
    ],
    '/admin/category/delete' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@delete',
        'middleware'=>'IsAdmin'
    ],  
    
    //user route 
    '/admin/user/list' => [
        'method' => 'get',
        'target' => 'Admin\UserController@list',
        'middleware'=>'IsAdmin'
    ],
    '/admin/user/add' => [
        'method' => 'get',
        'target' => 'Admin\UserController@add',
        'middleware'=>'IsAdmin'
    ],
    '/admin/user/save' => [
        'method' => 'post',
        'target' => 'Admin\UserController@save',
        'middleware'=>'IsAdmin'
    ],
    '/admin/user/edit' => [
        'method' => 'get',
        'target' => 'Admin\UserController@edit',
        'middleware'=>'IsAdmin'
    ],
    '/admin/user/update' => [
        'method' => 'post',
        'target' => 'Admin\UserController@update',
        'middleware'=>'IsAdmin'
    ],
    '/admin/user/delete' => [
        'method' => 'get',
        'target' => 'Admin\UserController@delete',
        'middleware'=>'IsAdmin'
    ],  
    
    
    //option route 
    '/admin/option/list' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@list',
        'middleware'=>'IsAdmin'
    ],
    '/admin/option/add' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@add',
        'middleware'=>'IsAdmin'
    ],
    '/admin/option/save' => [
        'method' => 'post',
        'target' => 'Admin\OptionController@save',
        'middleware'=>'IsAdmin'
    ],
    '/admin/option/edit' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@edit',
        'middleware'=>'IsAdmin'
    ],
    '/admin/option/update' => [
        'method' => 'post',
        'target' => 'Admin\OptionController@update',
        'middleware'=>'IsAdmin'
    ],
    '/admin/option/delete' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@delete',
        'middleware'=>'IsAdmin'
    ],
    
    
    //tag route 
    '/admin/tag/list' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@list',
        'middleware'=>'IsAdmin'
    ],
    '/admin/tag/add' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@add',
        'middleware'=>'IsAdmin'
    ],
    '/admin/tag/save' =>[
        'method' => 'post',
        'target' => 'Admin\TagController@save',
        'middleware'=>'IsAdmin'
    ],
    '/admin/tag/edit' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@edit',
        'middleware'=>'IsAdmin'
    ],
    '/admin/tag/update' =>[
        'method' => 'post',
        'target' => 'Admin\TagController@update',
        'middleware'=>'IsAdmin'
    ],
    '/admin/tag/delete' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@delete',
        'middleware'=>'IsAdmin'
    ],

    //post route 
    '/admin/post/list' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@list',
        'middleware'=>'IsAdmin'
    ],
    '/admin/post/add' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@add',
        'middleware'=>'IsAdmin'
    ],
    '/admin/post/save' =>[
        'method' => 'post',
        'target' => 'Admin\PostController@save',
        'middleware'=>'IsAdmin'
    ],
    '/admin/post/edit' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@edit',
        'middleware'=>'IsAdmin'
    ],
    '/admin/post/update' =>[
        'method' => 'post',
        'target' => 'Admin\PostController@update',
        'middleware'=>'IsAdmin'
    ],
    '/admin/post/delete' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@delete',
        'middleware'=>'IsAdmin'
    ],

// end of admin route
);