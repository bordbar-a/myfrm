<?php


function config($name)
{
    $this_config_path = BASE_PATH . 'config' . DIRECTORY_SEPARATOR . "$name.php";


    if (!file_exists($this_config_path)) {
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
    return array_filter($array, function ($item) {

        return trim($item) !== '';
    });

}


function site_url($uri = '')
{
    return BASE_URL . $uri;
}


function theme_url($uri = '')
{

    $active_theme = DEFAULT_THEME;
    return site_url("view/$active_theme/$uri");
}


function theme_path($uri, $theme)
{
    $uri = str_replace('|', DIRECTORY_SEPARATOR, $uri);
    return BASE_VIEW_PATH . 'layouts' . DIRECTORY_SEPARATOR . 'themes' . DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR . $uri;
}


function admin_url($uri = '')
{
    return site_url('admin/' . $uri);
}


function storage_url($path)
{
    $path_url = str_replace(DIRECTORY_SEPARATOR, '/', $path);
    return site_url('storage/' . $path_url);
}

function get_option($key)
{
    $data = \App\Utilities\Option::get($key);
    return $data;
}

function get_current_route()
{
    return $_SERVER['REQUEST_URI'];
}

function assets($filepath)
{
    $active_theme = get_active_theme();
    return site_url('views/' . $active_theme . '/assets/' . $filepath);
}

function assets_admin($filepath)
{
    return site_url('views/admin/assets/' . $filepath);
}

function array_of_object($arr2d)
{

    $array_of_objects = array();

    foreach ($arr2d as $arr) {
        $array_of_objects[] = (object)$arr;
    }
    return $array_of_objects;
}


function get_date($format = 'Y-m-d H:i:s')
{
    return date($format);
}


function get_active_theme()
{
    return get_option('active_theme');
}


function get_widget($widget_name)
{
    $view = '';
    $widget_path = BASE_WIDGET_VIEW_PATH . $widget_name . '.php';
    if (file_exists($widget_path)) {
        ob_start();
        include $widget_path;
        $view = ob_get_clean();
    }
    return $view;
}

function get_page_header($page = 'index')
{

    $route = array(
        '/'=>'index',
        '/auth' =>'auth',
        '/file/list' =>'filelist',
        '/single/file' =>'filesingle',
        '/basket/list' =>'cart',
        '/basket/checkout' =>'checkout',
    );

    $file_path = BASE_VIEW_PATH .
        get_active_theme() . DIRECTORY_SEPARATOR . 'page-header' . DIRECTORY_SEPARATOR .
        (($route[\App\Services\Router\Router::get_current_route()]) ?? 'index') . '.php';


    if(file_exists($file_path)){
        return $file_path;
    }

     return BASE_VIEW_PATH . DIRECTORY_SEPARATOR .
    get_active_theme() . 'page-header' .
    DIRECTORY_SEPARATOR . 'index.php';

}

// function storage_url($filename)
// {
//     return site_url("storage/$filename");
// }

// function storage_path($filename)
// {
//     return STORAGE_PATH . $filename;
// }


/*
    myDump() function work like as var_dump()

    in var_dump , It will display items 4 levels deep as an ellipsis.
    You can change the depth with an ini setting

    in myDump() , by default , deep level is 20
    You can change the depth with change $level_access variable

    in var_dump() function , if one of array's element, have array address
    this function echo '&array<' and all of text after '&array<'  ,
    are bolded text and have messy output , but myDump() is better in this issue
*/
function myDump(...$params)
{
    /*
        $level_access        ====> for manually set $level_access .
        $level               ====> use for indent
        $is_object           ====> to detect this input is object properties or not
        $array_in_object     ====> to decet this call is array in object
        $object_in_array     ====> to decet this call is object in array
    */
    static $level_access = 20;
    static $level = 0;
    static $is_object = 0;
    static $array_in_object = 0;
    static $object_in_array = 0;
    static $params_stack = [];


    /*
        $stack_size ==> by this variabe , we can detect ,
                        this call is first call of myDump or recursive call

        $caller     ==> this is an array , and give file path and line of myDump calls,
                         by $caller['file'] and $caller['line']
    */
    $bt = debug_backtrace();
    $stack_size = sizeof($bt);
    $caller = array_shift($bt);


    //this if for check level access .
    if ($level >= $level_access) {
        if ($object_in_array && (!$array_in_object)) {
            $level++;
            echo str_repeat('&nbsp;', 4 * ($level)) . "<span style='color:magenta;'> maximum level access , you can set depth from '\$level_access' variable in function $</span><br>";
            $level--;
        } else {
            echo "<span style='color:magenta;'> maximum level access , you can depth this from '\$level_access' variable in function</span><br>";
        }
        return;
    }

    /*
        if in first call of myDump() :
         1- get path just in first call for every parameter like var_dump
            and don't get path in recursive call
         2- because $level , $is_object , $array_in_object and
            $object_in_array is static , and must to be zero in next
            use myDump() , ofcourse if call is not recursive call
            and this check by $stack_size
    */
    if ($stack_size == 1) {
        echo "<pre>";
        $path = $caller['file'] . ":" . $caller['line'] . ':';
        $level = 0;
        $is_object = 0;
        $array_in_object = 0;
        $object_in_array = 0;
    }

    //in every myDump() call , set $is_array false and in next if , check that.
    $is_array = false;

    // 1- if recive an array , by 1 element , and that elemnt is array , so
    //    put first element of this array in params and foreach on this array.
    if (sizeof($params) == 1 && gettype($params[0]) == "array") {
        $params = $params[0];
        $is_array = true;
        $size = sizeof($params);


        //if this call isn't recursive call ,print path of myDump call .
        if ($stack_size == 1) {
            echo $path;
        }
        //in this case , echo 'array' by bold font in 2 case
        if ((($is_object == 0 && $stack_size >= 1) || ($array_in_object && !$object_in_array)) && !($level >= $level_access)) {
            echo "<br>" . str_repeat('&nbsp;', 4 * ($level)) .
                "<span style='font-weight:bold'>array</span>(size={$size})<br>";
        }
        $level++;
    }


    // 1- for each on $params
    //    and it set already.
    foreach ($params as $key => $param) {

        /*
            prevent a bug by this
            because myDump() is recursive function , if
            one of array's element have address of that array , myDump call  unlimited
        */
        $is_continue = false;
        foreach ($params_stack as $prm) {
            if ($param === $prm) {
                echo str_repeat('&nbsp;', 4 * $level) .
                    (gettype($key) == 'integer' ? " {$key}" : "'$key'") . " =><br>";
                $level++;
                echo str_repeat('&nbsp;', 4 * $level) . "&array< <br>";
                $level--;
                $is_continue = true;
                break;
            }
        }
        if ($is_continue == true) {
            continue;
        }
        //end of prevent a bug


        //  1- if this call is first call and dont $is_array==1 ,
        //     so set default value for static variable and get path and echo that.
        if ($stack_size == 1 && $is_array != true) {
            $path = $caller['file'] . ":" . $caller['line'] . ':';
            $level = 0;
            $is_object = 0;
            $array_in_object = 0;
            $object_in_array = 0;
            echo $path;
        }

        /*
            this switch for check type of every parameter
            in each case , have 2 state , in array or not
            if $is_array =1 , so echo key of array element
        */
        switch (gettype($param)) {


            //if type of parameter is integer
            case "integer":
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") .
                        " => int <span style='color:green;'>{$param}</span><br>";
                } else {
                    echo "int <span style='color:green;'>{$param}</span><br>";
                }
                break;

            //if type of parameter is double , this echo float , like as var_dump
            case "double":
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") .
                        " => float <span style='color:orange;'>{$param}</span><br>";
                } else {
                    echo "float <span style='color:orange;'>{$param}</span><br>";
                }
                break;


            //if type of parameter is string
            case "string":
                $size = strlen($param);
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") .
                        " => string <span style='color:red;'>'{$param}'</span>" .
                        " <span style='font-style:italic;'>(Lenght={$size})</span><br>";
                } else {
                    echo "string <span style='color:red;'>'{$param}'</span>" .
                        " <span style='font-style:italic;'>(Lenght={$size})</span><br>";
                }
                break;

            //if type of parameter is boolean
            case "boolean":
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") .
                        " => boolean<span style='color:brown ;'> " .
                        ($param == true ? "true" : "false") . "</span><br>";
                } else {
                    echo "boolean<span style='color:brown ;'> " .
                        ($param == true ? "true" : "false") . "</span><br>";
                }
                break;


            //if type of parameter is boolean
            case "NULL":
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") .
                        " => <span style='color:slateblue ;'>null</span><br>";
                } else {
                    echo "<span style='color:slateblue ;'>null</span><br>";
                }
                break;
            case "resource":
                $resource_type = get_resource_type($param);
                $resource_id = substr((string)$param, strpos((string)$param, '#') + 1);
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") .
                        " => <span style='font-weight:bold ;'>resource</span>({$resource_id}, {$resource_type})<br>";
                } else {
                    echo "<span style='font-weight:bold ;'>resource</span>({$resource_id}, {$resource_type})<br>";
                }
                break;

            //if type of param is array , myDump() call by send this array , and this is recursive call
            case "array":
                $object_in_array = 0;
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") . " =>";
                }

                //if this params is object properties and now a property in that is array ,
                // set $array_in_object to 1 for handle this in next myDump call
                if ($is_object) {
                    $array_in_object = 1;
                }
                if ($stack_size > 1 || $is_array == true) {
                    $level++;
                }

                $params_stack[] = $params;
                myDump($param);
                $level--;
                break;

            /*
                1- this case for object type.
                2- if this call just contain an array ,
                   and one of array's element have object , so
                   echo element's key and set $object_in_array to 1 for
                   handle in next myDump call .
                3- use get_object_vars and send this array to myDump and
                   this is recursive call and
                   for detect this array is object's properties in next myDump() call ,
                   set $is_object to 1
            */
            case "object":
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        (gettype($key) == 'integer' ? " {$key}" : "'$key'") . " =><br>";
                    $object_in_array = 1;
                }
                if ($is_object || $is_array) {
                    $level++;
                }

                $class = get_class($param);
                $is_object = 1;
                if ($is_array) {
                    echo str_repeat('&nbsp;', 4 * $level) .
                        "<span style='font-weight:bold'>object</span>({$class})<br>";
                } else {
                    echo "<br><span style ='font-weight:bold'>object</span>({$class})<br>";
                }
                $object_vars_array = get_object_vars($param);
                $params_stack[] = $params;
                myDump($object_vars_array);
                $level--;
                break;


            default:
                echo "is not int , float , string , boolean , null , array , object ,resource";

        }//End of Switch


        //new line , for every parameter in first call of myDump , like var_dump method
        if ($stack_size == 1 && $is_array != true) {
            echo "<br>";
        }
    }//end of foreach

    if ($level > 1) {
        $level--;
    } else {
        $level = 0;
    }
    //for good style , and this echo only in first call of myDump()
    if ($stack_size == 1) {
        $params_stack = [];
        echo "</pre>";
    }
}//end of myDump function