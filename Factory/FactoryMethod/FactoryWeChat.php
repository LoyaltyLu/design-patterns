<?php


namespace LoyaltyLu\DesignPatterns\Factory\FactoryMethod;

/**
 * 4.创建具体工厂类（继承抽象工厂类），定义创建对应具体产品实例的方法
 * Class FactoryAli
 * @package LoyaltyLu\DesignPatterns\Factory\FactoryMethod
 */
class FactoryWeChat implements CreatePayFactoryMethod
{

    public function create()
    {
        // TODO: Implement create() method.
        return new WeChatPay();
    }
}