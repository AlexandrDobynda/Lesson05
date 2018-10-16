<?php

namespace Lesson05;

/**
 * Class BasketDiscounts
 * @package Lesson05
 */
trait BasketDiscounts
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
    public function getUserAndSaleDiscounts()
    {
        return (100 - $this->getUserDiscount()) / 100 * (100 - $this->getSaleDiscount()) / 100;
    }
}