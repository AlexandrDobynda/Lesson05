<?php

namespace Lesson05;

require_once('Basket.php');
require_once('BasketDiscounts.php');
require_once('BasketPrices.php');
require_once('UserBasket.php');


$test = new UserBasket(1);
$test2 = new UserBasket(1);


$test2->addGoods(3, 2);


$test->addGoods(1,1);
$test->addGoods(3, 2);
$test->addGoods(4,1);

$test2->showProductsList();
$test2->showProductsSum();

$test->showProductsList();
$test->showProductsSum();

