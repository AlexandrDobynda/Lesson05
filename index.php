<?php

namespace Lesson05;


require_once('Basket.php');
require_once('BasketDiscounts.php');
require_once('BasketPrices.php');
require_once('UserBasket.php');



if (!isset($_COOKIE['test'])) {
    setcookie('test', 1, time() + 60);
} else {
    setcookie('test', ($_COOKIE['test'] + 1),time() + 60);
}

echo $_COOKIE['test'];

echo '<br>';

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




echo '<pre>';
print_r($test);
echo count((array)$test);
echo '</pre>';
