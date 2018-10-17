<?php

namespace Lesson05;

require_once ('Storage.php');
/**
 * Class Basket
 * @package Lesson05
 */
class Basket
{
    /**
     * @var object $goods
     */
    protected $goods;

    public function __construct()
    {
        $this->goods = new Storage();
    }

    /**
     * @param int $goodsId
     * @param int $count
     */
    public function addGoods(int $goodsId, int $count)
    {
        /**
         * Берет из базы товар по ID.
         */
        $this->goods[] =[
            'id' => 1,
            'productName' => 'nameSample',
            'price' => 500,
            'discount, %' => 5,
            'quantity' => $count

        ];
    }
}


