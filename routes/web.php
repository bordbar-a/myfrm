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
        'middleware'=>'AdminPanelGuard'
    ],

    
    //category route 
    '/admin/category/list' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@list',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/category/add' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@add',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/category/save' =>[
        'method' => 'post',
        'target' => 'Admin\CategoryController@save',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/category/edit' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@edit',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/category/update' =>[
        'method' => 'post',
        'target' => 'Admin\CategoryController@update',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/category/delete' =>[
        'method' => 'get',
        'target' => 'Admin\CategoryController@delete',
        'middleware'=>'AdminPanelGuard'
    ],  
    
    //user route 
    '/admin/user/list' => [
        'method' => 'get',
        'target' => 'Admin\UserController@list',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/user/add' => [
        'method' => 'get',
        'target' => 'Admin\UserController@add',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/user/save' => [
        'method' => 'post',
        'target' => 'Admin\UserController@save',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/user/edit' => [
        'method' => 'get',
        'target' => 'Admin\UserController@edit',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/user/update' => [
        'method' => 'post',
        'target' => 'Admin\UserController@update',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/user/delete' => [
        'method' => 'get',
        'target' => 'Admin\UserController@delete',
        'middleware'=>'AdminPanelGuard'
    ],  
    
    
    //option route 
    '/admin/option/list' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@list',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/option/add' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@add',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/option/save' => [
        'method' => 'post',
        'target' => 'Admin\OptionController@save',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/option/edit' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@edit',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/option/update' => [
        'method' => 'post',
        'target' => 'Admin\OptionController@update',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/option/delete' => [
        'method' => 'get',
        'target' => 'Admin\OptionController@delete',
        'middleware'=>'AdminPanelGuard'
    ],
    
    
    //tag route 
    '/admin/tag/list' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@list',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/tag/add' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@add',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/tag/save' =>[
        'method' => 'post',
        'target' => 'Admin\TagController@save',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/tag/edit' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@edit',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/tag/update' =>[
        'method' => 'post',
        'target' => 'Admin\TagController@update',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/tag/delete' =>[
        'method' => 'get',
        'target' => 'Admin\TagController@delete',
        'middleware'=>'AdminPanelGuard'
    ],

    //post route 
    '/admin/post/list' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@list',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/post/add' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@add',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/post/save' =>[
        'method' => 'post',
        'target' => 'Admin\PostController@save',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/post/edit' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@edit',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/post/update' =>[
        'method' => 'post',
        'target' => 'Admin\PostController@update',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/post/delete' =>[
        'method' => 'get',
        'target' => 'Admin\PostController@delete',
        'middleware'=>'AdminPanelGuard'
    ],
    
    
    
    //file route 
    '/admin/file/list' =>[
        'method' => 'get',
        'target' => 'Admin\FileController@list',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/file/add' =>[
        'method' => 'get',
        'target' => 'Admin\FileController@add',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/file/save' =>[
        'method' => 'post',
        'target' => 'Admin\FileController@save',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/file/edit' =>[
        'method' => 'get',
        'target' => 'Admin\FileController@edit',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/file/update' =>[
        'method' => 'post',
        'target' => 'Admin\FileController@update',
        'middleware'=>'AdminPanelGuard'
    ],
    '/admin/file/delete' =>[
        'method' => 'get',
        'target' => 'Admin\FileController@delete',
        'middleware'=>'AdminPanelGuard'
    ],

// end of admin route
);