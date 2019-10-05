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
    var_dump($last_call);
    var_dump(debug_backtrace());
    return $last_call['file'] . " ---- line " . $last_call['line'];
}


function GetCallingMethodName()
{
    $e = new Exception();
    $trace = $e->getTrace();
    //position 0 would be the line that called this function so we ignore it
    $last_call = $trace[1];
    print_r($last_call);
}


function removeEmptyMembers($array)
{
    return array_filter($array, function($item){

        return trim($item) !=='';
    });

}




function site_url($uri=''){
    return BASE_URL . $uri;
}


function theme_url($uri = ''){

    $active_theme = DEFAULT_THEME;
    return site_url("view/$active_theme/$uri");
}



function theme_path($uri){
    $uri = str_replace('|' , DIRECTORY_SEPARATOR , $uri);
    $active_theme = DEFAULT_THEME;
    return BASE_VIEW_PATH . DIRECTORY_SEPARATOR . $active_theme . DIRECTORY_SEPARATOR . $uri;
}


function admin_url($uri=''){
    return site_url('admin/' . $uri);
}



function assets($filepath){
    $active_theme = DEFAULT_THEME;
    return site_url('views/' . $active_theme . '/assets/' . $filepath);
}

function assets_admin($filepath){
    return site_url('views/admin/assets/' . $filepath);
}

function array_of_object($arr2d){
    
    $array_of_objects = array();

    foreach($arr2d as $arr){
        $array_of_objects[] = (object)$arr;
    }
    return $array_of_objects;
}




// function storage_url($filename)
// {
//     return site_url("storage/$filename");
// }

// function storage_path($filename)
// {
//     return STORAGE_PATH . $filename;
// }