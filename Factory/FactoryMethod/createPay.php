<?php


namespace LoyaltyLu\DesignPatterns\Factory\FactoryMethod;

/**
 *  2.创建抽象产品类 ，定义具体产品的公共接口
 * Interface createPay
 * @package LoyaltyLu\DesignPatterns\Factory\FactoryMethod
 */
interface createPay
{
    public function pay();
}