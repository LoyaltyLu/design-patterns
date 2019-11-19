<?php

namespace LoyaltyLu\DesignPatterns\Factory\FactoryMethod;

/**
 * 1.创建抽象工厂类，定义具体工厂的公共接口
 * Interface CreatePayFactoryMethod
 * @package LoyaltyLu\DesignPatterns\Factory\FactoryMethod
 */
interface CreatePayFactoryMethod
{
    public function create();
}