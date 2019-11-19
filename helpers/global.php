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



function theme_path($uri , $theme){
    $uri = str_replace('|' , DIRECTORY_SEPARATOR , $uri);
    return BASE_VIEW_PATH .'layouts' . DIRECTORY_SEPARATOR. 'themes'. DIRECTORY_SEPARATOR .  $theme . DIRECTORY_SEPARATOR . $uri;
}


function admin_url($uri=''){
    return site_url('admin/' . $uri);
}


function storage_url($path){
    $path_url = str_replace(DIRECTORY_SEPARATOR , '/' , $path);
    return site_url('storage/'.$path_url);
}



function assets($filepath){
    $active_theme = get_active_theme();
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


function get_date($format='Y-m-d H:i:s'){
    return date($format);
}


function get_active_theme(){
    return DEFAULT_THEME;
}


// function storage_url($filename)
// {
//     return site_url("storage/$filename");
// }

// function storage_path($filename)
// {
//     return STORAGE_PATH . $filename;
// }