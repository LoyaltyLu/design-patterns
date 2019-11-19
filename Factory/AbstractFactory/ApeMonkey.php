<?php


namespace LoyaltyLu\DesignPatterns\Factory\AbstractFactory;

/**
 * 4. 创建具体产品类（继承抽象产品类） & 定义生产的具体产品
 * Class ApeMonkey
 * @package LoyaltyLu\DesignPatterns\Factory\AbstractFactory
 */
class ApeMonkey implements Monkey
{
    /**
     * @return mixed
     */
    public function say()
    {
        // TODO: Implement say() method.
        echo "我是一只猿猴 🐒 \n";
    }
}