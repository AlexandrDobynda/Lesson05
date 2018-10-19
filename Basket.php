<?php

namespace Lesson05;

require_once('Product.php');

/**
 * Class Basket
 * @package Lesson05
 */
class Basket
{
    /**
     * @var array $dbItem
     * @var object $goods
     */
    private $dbItem;
    protected $goods;

    /**
     * @param int $goodsId
     * @return array
     */
    public function loadProductFromDB(int $productId)
    {
        return [
            'id' => 1,
            'productName' => 'nameSample',
            'price' => 500,
            'discount' => 5
        ];
    }

    /**
     * @param int $goodsId
     * @param int $count
     */
    public function addGoods(int $goodsId, int $count)
    {
        $this->dbItem = $this->loadProductFromDB($goodsId);

        $this->goods[] = new Product(
            $this->dbItem['id'],
            $this->dbItem['productName'],
            $this->dbItem['price'],
            $this->dbItem['discount'],
            $count
        );
    }
}


