<?php

namespace App\Widgets;

use App\Services\Basket\Basket;
use App\Widgets\Contract\BaseWidget;

class WidgetBasket extends BaseWidget{
    public function handle()
    {

        $items = Basket::items();
        return $items;
    }

}
