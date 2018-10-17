<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 17.10.2018
 * Time: 11:48
 */

namespace Lesson05;


class Product
{
    public $id = 1;
    public $productName = 'nameSample';
    public $price = 500;
    public $discount = 5;
    public $quantity = 1;

    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }
}