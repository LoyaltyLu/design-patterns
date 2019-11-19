<?php


namespace LoyaltyLu\DesignPatterns\Factory\OptimizeAbstractFactory;


/**
 * 产品父类
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