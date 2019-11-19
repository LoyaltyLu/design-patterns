<?php

namespace LoyaltyLu\DesignPatterns\Factory\AbstractFactory;

/**
 * 1.创建抽象工厂类，定义具体工厂的公共接口；
 * Interface Factory
 * @package LoyaltyLu\DesignPatterns\Factory\AbstractFactory
 */
interface Factory
{
    /**
     * @return mixed
     */
    public function createHuMan();

    /**
     * @return mixed
     */
    public function createMonkey();
}