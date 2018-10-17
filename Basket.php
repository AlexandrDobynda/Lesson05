<?php

namespace Lesson05;

require_once ('Product.php');
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
    /**
     * @param int $goodsId
     * @param int $count
     */
    public function addGoods(int $goodsId, int $count)
    {
        /**
         * Берет из базы товар по ID.
         */
        $this->goods[] =  new Product($count);
    }


}


