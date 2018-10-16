<?php

namespace Lesson05;

class BasketShow extends BasketDiscounts
{
    /**
     * @var int $sum
     * @var int $discountSum
     * @var int $count
     */
    private $sum = 0;
    private $discountSum = 0;
    private $count = 0;

    /**
     *Show basket list
     */
    public function showProductsList()
    {
        foreach ($this->goods as $good => $name) {
            $discountPrice = round($name['price'] * $this->getFullDiscount() * (100 - $name['discount, %']) / 100, 2);

            echo '#' . $good . ': ' . $name['productName'] . ', full price: ' . $name['price'];
            echo '/with discount: ' . $discountPrice . '<br>';
        }

        echo '<br>';
    }

    /**
     *
     */
    public function showProductsSum()
    {
        foreach ($this->goods as $good => $name) {
            $discountPrice = round($name['price'] * $this->getFullDiscount() * (100 - $name['discount, %']) / 100, 2);

            $count++;
            $sum += $name['price'];
            $discountSum += $discountPrice;
        }


        echo 'Total: ' . $sum . '/ with discount: ' . $discountSum . '<br>';
        echo 'Products count: ' . $count;
        echo '<br> <br>';
    }

}
