<?php


namespace LoyaltyLu\DesignPatterns\Factory\AbstractFactory;

/**
 * 5.创建具体工厂类（继承抽象工厂类），定义创建对应具体产品实例的方法
 * Class ManFactory
 * @package LoyaltyLu\DesignPatterns\Factory\AbstractFactory
 */
class ManFactory implements Factory
{

    /**
     * @return mixed
     */
    public function createHuMan()
    {
        // TODO: Implement createHuMan() method.
        return new Man();
    }

    /**
     * @return mixed
     */
    public function createMonkey()
    {
        // TODO: Implement createMonkey() method.
        return new ApeMonkey();
    }
}