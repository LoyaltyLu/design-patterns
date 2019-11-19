<?php


namespace LoyaltyLu\DesignPatterns\Factory\FactoryMethod;


/**
 * 3.创建具体产品类（继承抽象产品类）， 定义生产的具体产品；
 * Class WeChatPay
 * @package LoyaltyLu\DesignPatterns\Factory\FactoryMethod
 */
class WeChatPay implements createPay
{

    public function pay()
    {
        // TODO: Implement pay() method.
        echo "WeChatPay";
    }
}