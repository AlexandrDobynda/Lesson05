<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 16.10.2018
 * Time: 16:13
 */

namespace Lesson05;

/**
 * Class BasketDiscounts
 * @package Lesson05
 */
class BasketDiscounts extends Basket
{
    /**
     * @return int
     */
    public function getUserDiscount()
    {
        return 10;
    }

    /**
     * @return int
     */
    public function getSaleDiscount()
    {
        return 15;
    }

    /**
     * @return float|int
     */
    public function getFullDiscount()
    {
        return (100 - $this->getUserDiscount()) / 100 * (100 - $this->getSaleDiscount()) / 100;
    }
}