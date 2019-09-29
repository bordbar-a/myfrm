<?php


function config($name)
{
    $this_config_path = BASE_PATH.'config' . DIRECTORY_SEPARATOR . "$name.php";


    if (! file_exists($this_config_path)) {
        echo "The '$name' config not found" . PHP_EOL;
        return false;
    }

    return include $this_config_path;
}


function where()
{
    $e = new Exception();
    $trace = $e->getTrace();
    $last_call = $trace[0];
    return $last_call['file'] . "---- line " . $last_call['line'];
}


function GetCallingMethodName()
{
    $e = new Exception();
    $trace = $e->getTrace();
    //position 0 would be the line that called this function so we ignore it
    $last_call = $trace[1];
    print_r($last_call);
}


function site_url($uri)
{
    return BASE_URL . $uri;
}





function removeEmptyMembers($array)
{
    return array_filter($array, function($item){

        return trim($item) !=='';
    });

}
