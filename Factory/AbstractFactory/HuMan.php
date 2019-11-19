<?php


namespace LoyaltyLu\DesignPatterns\Factory\AbstractFactory;


/**
 * 3.创建抽象产品族类 ，定义抽象产品的公共接口
 * Interface HuMan
 * @package LoyaltyLu\DesignPatterns\Factory\AbstractFactory
 */
interface HuMan extends ProductFamily
{
    /**
     * @return mixed
     */
    public function say();
}