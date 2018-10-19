<?php


namespace Lesson05;

/**
 * Class Product
 * @package Lesson05
 */
class Product
{
    /**
     * @var int $id
     * @var string $productName
     * @var int $price
     * @var int $discount
     * @var int $quantity
     */
    public $id;
    public $productName;
    public $price;
    public $discount;
    public $quantity;

    public function __construct(int $id, string $productName, int $price, int $discount, int $quantity)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->price = $price;
        $this->discount = $discount;
        $this->quantity = $quantity;
    }
}