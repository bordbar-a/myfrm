<?php
session_start();
use App\Core\Request;

require_once 'bootstrap'. DIRECTORY_SEPARATOR . 'constants.php';
require_once 'helpers' . DIRECTORY_SEPARATOR . 'global.php';
require_once 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require_once 'bootstrap' . DIRECTORY_SEPARATOR . 'init.php';





App\Services\Router\Router::start();

