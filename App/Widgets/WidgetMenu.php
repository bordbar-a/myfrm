<?php

namespace App\Widgets;

use App\Models\Menu;
use App\Widgets\Contracts\BaseWidget;

class WidgetMenu extends BaseWidget{
    public function handle()
    {
        $menuObject = new Menu();
        $menus = $menuObject->read();
        $generate_menu = $this->generate_menu($menus);
        return $generate_menu;
    }




    public function generate_menu($items , $parent_id= 0)
    {
        $menu_items = array();

        foreach ($items as $item){
            if($item->parent_id == $parent_id){
                $item->subs = array();
                $item->subs = $this->generate_menu($items , $item->id);
                $menu_items [] = $item;
            }
        }

        return $menu_items;
    }



}
