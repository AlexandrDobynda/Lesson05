<?php

namespace Lesson05;

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
        $this->goods = new \stdClass();
    }

    /**
     * @param int $goodsId
     *
     */
    public function addGoods(int $goodsId, int $count = null)
    {
        /**
         * Берет из базы товар по ID.
         */
        if ($count == null) {
            $j = count((array)$this->goods);
            $this->goods->{$j + 1} = [
                'id' => 1,
                'productName' => 'nameSample',
                'price' => 500,
                'discount, %' => 5
            ];
        }

        if ($count) {
            $j = count((array)$this->goods);

            for ($i = 1; $i <= $count; $i++) {

                $this->goods->{$j + $i} = [
                    'id' => 1,
                    'productName' => 'nameSample',
                    'price' => 500,
                    'discount, %' => 5
                ];
            }
        }
    }
}


