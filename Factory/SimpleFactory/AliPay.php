<?php


namespace LoyaltyLu\DesignPatterns\Factory\SimpleFactory;

/**
 * 实现接口类
 * Class AliPay
 * @package LoyaltyLu\DesignPatterns\Factory\SimpleFactory
 */
class AliPay implements PaySimpleFactory
{
    public function pay()
    {
        // TODO: Implement pay() method.
        echo "AliPay";
    }
}