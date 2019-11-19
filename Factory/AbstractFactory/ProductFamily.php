<?php


namespace LoyaltyLu\DesignPatterns\Factory\AbstractFactory;


/**
 * 2. 创建抽象产品族类 ，定义具体产品的公共接口
 * Interface ProductFamily
 * @package LoyaltyLu\DesignPatterns\Factory\AbstractFactory
 */
interface ProductFamily
{
    public function say();
}