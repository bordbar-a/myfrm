<?php

namespace App\Services\Router;

use App\Core\Request;
use App\Services\View\View;

class Router
{
    const baseMiddleware = '\\App\\Middlewares\\';
    const baseController = '\\App\\Controllers\\';
    public static function start()
    {
        $routes = self::get_all_route();
        $current_uri = self::get_current_route();

        if (! self::route_exist($current_uri)) {
            header("HTTP/1.0 404 Not Found");
            View::load('errors.404');
            die();
        }

        $request = new Request();
        $allowed_request_method = self::get_route_methods($current_uri);

        if (! $request->is_in($allowed_request_method)) {
            header('HTTP/1.0 403 Forbidden');
            echo 'You are forbidden! - occoured in : ' . where();
            die();
        }

        if (self::has_middleware($current_uri)) {
            $middlewares = self::get_route_middlewares($current_uri);
            foreach ($middlewares as $middleware) {
                $middlewareClass = self::baseMiddleware. $middleware;
                if (!class_exists($middlewareClass) && IS_DEV_MODE) {
                    echo "the {$middlewareClass} does not exist --- occoured in : " . where();
                    die();
                }
                $middlewareObj = new $middlewareClass;
                
                $middlewareObj->handle($request);
            }
        }



        //call controller method
        $route_target = self::get_route_target($current_uri);
        list($controller, $method) = explode('@', $route_target);

        $controllerClass = self::baseController.$controller;

        if (! class_exists($controllerClass) && IS_DEV_MODE) {
            echo "the '$controllerClass' class was not found! --- occoured in : " . where();
            die();
        }

        $controlerObj = new $controllerClass;
        
        if (! method_exists($controlerObj, $method) && IS_DEV_MODE) {
            echo "the '$method' method was not found in '$controllerClass' class ---- occoured in : " . where();
            die();
        }

        $controlerObj->$method($request);
    }// end of start method



    public static function get_all_route()
    {
        return  include BASE_PATH . 'routes'. DIRECTORY_SEPARATOR . 'web.php';
    }


    public static function get_current_route()
    {
        $current_uri =  str_replace(SUB_DIRECTORY, '', $_SERVER['REQUEST_URI']);
        $current_uri = strtok($current_uri, '?');
        return rtrim($current_uri,'/');
    }


    
    public static function route_exist($current_uri)
    {
        $routes  = self::get_all_route();
        return key_exists($current_uri, $routes);
    }

    public static function get_route_methods($current_uri)
    {
        $routes = self::get_all_route();

        $methods_str = $routes[$current_uri]['method'];
        return removeEmptyMembers(explode('|', $methods_str));
    }



    public static function has_middleware($route)
    {
        $routes = self::get_all_route();
        return isset($routes[$route]['middleware']) or !empty(GLOBAL_MIDDLEWARES);
    }

    public static function get_route_middlewares($route)
    {
        $routes = self::get_all_route();
        $middlewaresStr = GLOBAL_MIDDLEWARES . "|" . ($routes[$route]['middleware'] ?? '');
        return array_unique(removeEmptyMembers(explode('|', $middlewaresStr)));
    }


    public static function get_route_target($route)
    {
        $routes = self:: get_all_route();
        return $routes[$route]['target'];
    }
}
