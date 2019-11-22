<?php

define('BASE_URL' , 'http://myfrm.mehost:8080/');

define('BASE_PATH' ,dirname(__DIR__) . DIRECTORY_SEPARATOR);

define('BASE_VIEW_PATH' ,BASE_PATH . 'views' . DIRECTORY_SEPARATOR);
define('BASE_STORAGE_PATH' , BASE_PATH . 'storage' . DIRECTORY_SEPARATOR);

define('BASE_WIDGET_VIEW_PATH' , BASE_PATH .'App' . DIRECTORY_SEPARATOR. 'Widgets' . DIRECTORY_SEPARATOR .'view_widget' . DIRECTORY_SEPARATOR);

define('DEFAULT_THEME' ,'one');

define('GLOBAL_MIDDLEWARES' ,'');

//set when project is not in root
define('SUB_DIRECTORY', '');

define('IS_DEV_MODE' , 1);

