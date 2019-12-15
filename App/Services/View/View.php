<?php

namespace App\Services\View;

class View
{
    public static function load_from_base($view, $data = array(), $layout = null, $have_pagination = true, $have_header = true, $have_footer = true)
    {
        $view = str_replace('.', DIRECTORY_SEPARATOR, $view);
        $full_view_path = BASE_VIEW_PATH . $view . ".php";

        if (!(file_exists($full_view_path) && is_readable($full_view_path))) {
            echo "error : view not exist ";
            die();
        }

        ob_start();
        extract($data);
        include_once $full_view_path;
        $view = ob_get_clean();
        if (is_null($layout)) {
            echo $view;
        } elseif ($layout == 'admin') {
            $layout_full_view_path = BASE_VIEW_PATH . 'layouts' . DIRECTORY_SEPARATOR . $layout . DIRECTORY_SEPARATOR . 'index.php';
            include_once $layout_full_view_path;
        } else {
            $layout_full_view_path = BASE_VIEW_PATH . 'layouts' . DIRECTORY_SEPARATOR . 'themes' . DIRECTORY_SEPARATOR . get_active_theme() . DIRECTORY_SEPARATOR . 'index.php';
            include_once $layout_full_view_path;
        }
    }

    public static function load($view, $data = array(), $layout = null, $have_pagination = true, $have_header = true, $have_footer = true)
    {
        self::load_from_base(get_active_theme() . '.' . $view, $data, $layout, $have_pagination , $have_header, $have_footer);
    }
}
