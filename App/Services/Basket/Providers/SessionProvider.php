<?php

namespace App\Services\Basket\Providers;

use App\Services\Basket\Contract\BasketProvider;

class SessionProvider extends BasketProvider
{

    const CART_KEY = 'cart';


    public function add(\stdClass $item)
    {
        if (!$this->is_exist_item_by_id($item->id)) {
            $item->count = $item->count ?? 1;
            $_SESSION[self::CART_KEY][$item->id] = $item;
            return true;
        }
        $_SESSION[self::CART_KEY][$item->id]->count += 1;


        return $this->is_exist_item_by_id($item->id);
    }

    public function total_price(): int
    {
        $total_price = 0;
        foreach ($this->items() as $item) {
            $total_price += $item->price * $item->count;
        }

        return $total_price;
    }

    public function remove(int $id)
    {
        if ($this->is_exist_item_by_id($id)) {
            unset($_SESSION[self::CART_KEY][$id]);
        }
    }

    public function items()
    {
        if (!$this->is_basket_empty()) {
            return $_SESSION[self::CART_KEY];
        }
        return array();
    }

    public function count(): int
    {
       return count($this->items());
    }

    public function reset()
    {
        if (!$this->is_basket_empty()) {
            unset($_SESSION[self::CART_KEY]);
        }
    }

    public function is_exist_item_by_id(int $id): bool
    {
        return isset($_SESSION[self::CART_KEY][$id]);
    }

    public function item_count_by_id(int $id): int
    {
        if ($this->is_exist_item_by_id($id)) {
            return $_SESSION[self::CART_KEY][$id]->count;
        }
        return 0;
    }

    public function is_basket_empty(): bool
    {
        return !isset($_SESSION[self::CART_KEY]);
    }

}
