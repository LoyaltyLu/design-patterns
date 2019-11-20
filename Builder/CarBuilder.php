<?php


namespace LoyaltyLu\DesignPatterns\Builder;

/**
 * 3.具体建造者(CarBuilder)角色
 * 需要依托于产品
 * Class CarBuilder
 * @package LoyaltyLu\DesignPatterns\Builder
 */
class CarBuilder implements Builder
{
    protected $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function buildPartA()
    {
        // TODO: Implement buildPartA() method.
        $this->car->setPartA();
    }

    public function buildPartB()
    {
        // TODO: Implement buildPartB() method.
        $this->car->setPartB();
    }

    public function buildPartC()
    {
        // TODO: Implement buildPartC() method.
        $this->car->setPartC();
    }

    public function buildOthers()
    {
        // TODO: Implement buildOthers() method.
        $this->car->setOthers();
    }

    /**
     * 返回最后组装成品结果 (返回最后装配好的汽车)，
     * 成品的组装过程不在这里进行,而是转移到下面的Director类中进行，
     * 从而实现了解耦过程和部件。
     * return Product
     */
    public function getCar()
    {
        // TODO: Implement getCar() method.
        return $this->car;
    }
}