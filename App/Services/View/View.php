<?php

namespace App\Services\View;

class View
{
    public static function load_from_base($view, $data =array(), $layout = null)
    {
        $view = str_replace('.', DIRECTORY_SEPARATOR, $view);
        $full_view_path = BASE_VIEW_PATH . $view . ".php";

        if (! (file_exists($full_view_path) && is_readable($full_view_path))) {
            echo "error : view not exist ";
            die();
        }

        ob_start();
        extract($data);
        include_once $full_view_path;
        $view = ob_get_clean();

        if(is_null($layout)){
            echo $view;
        }else {
            $layout_full_view_path = BASE_VIEW_PATH . 'layouts' . DIRECTORY_SEPARATOR . "$layout.php";
            include_once $layout_full_view_path;
        }
    }

    public static function load($view, $data =array(), $layout = null)
    {
        self::load_from_base(DEFAULT_THEME. '.' . $view, $data, $layout);
    }
}
