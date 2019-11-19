<?php


namespace LoyaltyLu\DesignPatterns\Factory\AbstractFactory;


/**
 * 3. 创建抽象产品类 ，定义具体产品的公共接口;
 * Interface HuMan
 * @package LoyaltyLu\DesignPatterns\Factory\AbstractFactory
 */
interface Monkey extends ProductFamily
{
    /**
     * @return mixed
     */
    public function say();
}