<?php


namespace LoyaltyLu\DesignPatterns\Factory\OptimizeAbstractFactory;


/**
 *4. 创建具体产品类（继承抽象产品类） & 定义生产的具体产品
 * Class Man
 * @package LoyaltyLu\DesignPatterns\Factory\AbstractFactory
 */
class Man implements HuMan
{
    /**
     * @return mixed
     */
    public function say()
    {
        // TODO: Implement say() method.
        echo "我是一个男人 👨 \n";
    }
}