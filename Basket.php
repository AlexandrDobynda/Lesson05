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
    public function loadProductFromDB(int $productId,int $count)
    {
        return new Product($count, $productId);
    }

    /**
     * @param int $goodsId
     * @param int $count
     */
    public function addGoods(int $goodsId, int $count)
    {
        $this->goods[] = $this->loadProductFromDB($goodsId, $count);
    }


}


