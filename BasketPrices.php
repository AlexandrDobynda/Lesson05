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
            $discountPrice = round($tag['price'] * $this->getUserAndSaleDiscounts() * (100 - $tag['discount, %']) / 100,
                2);
            $tag['discount prise'] = $discountPrice;
        }
    }

    public function calculateProductsSum()
    {
        foreach ($this->goods as $good => $tag) {
            $this->count += $tag['quantity'];
            $this->sum += $tag['price'] * $tag['quantity'];
            $this->discountSum += $tag['discount prise'] * $tag['quantity'];
        }
    }

    public function showProductsList()
    {
        $this->calculateDiscountPrices();

        foreach ($this->goods as $good => $tag) {
            echo '#' . $good . ': ' . $tag['productName'] . '(quantity:' . $tag['quantity'] . ')';
            echo ', full price: ' . $tag['price'] * $tag['quantity'];
            echo '/with discount: ' . $tag['discount prise'] * $tag['quantity'] . '<br>';
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
