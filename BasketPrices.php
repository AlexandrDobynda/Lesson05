<?php

namespace Lesson05;


/**
 * Class BasketShow
 * @package Lesson05
 */
class BasketPrices extends Basket
{
    use BasketDiscounts;

    /**
     * @var int $sum
     * @var int $discountSum
     * @var int $count
     */
    private $sum = 0;
    private $discountSum = 0;
    private $count = 0;

    public function calculateDiscountPrices()
    {
        foreach ($this->goods as $good => &$tag) {
            $discountPrice = round($tag->price * $this->getUserAndSaleDiscounts() * (100 - $tag->discount) / 100,
                2);
            $tag->discountPrise = $discountPrice;
            $tag->fullPrice = $tag->price * $tag->quantity;
            $tag->fullDiscountPrise = $discountPrice * $tag->quantity;
        }
    }

    public function calculateProductsSum()
    {
        foreach ($this->goods as $good => $tag) {
            $this->count += $tag->quantity;
            $this->sum += $tag->fullPrice;
            $this->discountSum += $tag->fullDiscountPrise;
        }
    }

    public function showProductsList()
    {
        $this->calculateDiscountPrices();

        foreach ($this->goods as $good => $tag) {
            echo '#' . $good . ': ' . $tag->productName . '(quantity:' . $tag->quantity . ')';
            echo ', full price: ' . $tag->fullPrice;
            echo '/with discount: ' . $tag->fullDiscountPrise . '<br>';
        }
        echo '<br>';
    }

    /**
     *
     */
    public function showProductsSum()
    {
        $this->calculateProductsSum();

        echo 'Total: ' . $this->sum . '/ with discount: ' . $this->discountSum . '<br>';
        echo 'Products count: ' . $this->count;
        echo '<br> <br>';
    }
}
