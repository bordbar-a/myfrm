<?php
/**
 * Created by PhpStorm.
 * User: Ali-PC
 * Date: 12/2/2019
 * Time: 9:41 PM
 */

namespace App\Services\Basket\Contract;


abstract class BasketProvider
{

    public static $instance = null;


    public static function instance()
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }
        return static::$instance;
    }


    protected function __construct()
    {
    }


    public abstract function add(\stdClass $item);

    public abstract function total_price(): int;

    public abstract function remove(int $item_id);

    public abstract function items();

    public abstract function count(): int;

    public abstract function reset();

    public abstract function is_exist_item_by_id(int $id): bool;

    public abstract function item_count_by_id(int $id): int;

    public abstract function is_basket_empty(): bool;

}