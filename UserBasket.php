<?php

namespace Lesson05;


/**
 * Class UserBasket
 * @package Lesson05
 */
class UserBasket extends BasketPrices
{
    /**
     * @var int $userId
     */
    private $userId;

    /**
     * UserBasket constructor.
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function saveBasket()
    {
        /**
         * save in db
         */
    }

    public function loadBasket()
    {
        /**
         * load from db
         */
    }

}