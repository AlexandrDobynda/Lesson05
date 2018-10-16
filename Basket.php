<?php

namespace Lesson05;


/**
 * Class Basket
 * @package Lesson04
 */
class Basket
{
    /**
     * @var array $goods
     */
    private $goods = [];

    /**
     * @param $item
     * @return mixed
     */
    public function __get($item)
    {
        return $this->$item;
    }

    /**
     * @param int $goodsId
     *
     */
    public function addGoods(int $goodsId)
    {
        /**
         * Берет из базы товар по ID.
         */
        $this->goods[] = ['id' => 1, 'productName' => 'nameSample', 'price' => 500, 'discount, %' => 5];
    }
}


