<?php

namespace App\Core;

class Request
{
    public $method;
    public $uri;
    public $ip;
    public $agent;
    public $referer;
    public $params;
    public $files;
    
    

    public function __construct()
    {
        // To Do  ---- check data sanitize
        $this->params = $_REQUEST;
    
        $this->method =  strtolower($_SERVER['REQUEST_METHOD']);
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->referer = $_SERVER['HTTP_REFERER'] ?? '';
    }




    public function is_in($route_methods)
    {
        return in_array($this->method, $route_methods);
    }


    public function key_exists($key)
    {
        return key_exists($key, $this->params);
    }

    public function param($key)
    {
        if ($this->key_exists($key)) {
            return $this->params[$key];
        }
    }


    public function __get($key)
    {
        if (! $this->key_exists($key)) {
            echo "the '$key' property not exists in this request" . PHP_EOL;
            return ;
        }
        return $this->{$key} = $this->param($key);
    }



    public static function redirect($route)
    {
        header("Location: " . site_url($route));
        die();
    }


    public function isAjax()
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        }
        return false;
    }
}// end of Request Class
