<?php

namespace LoyaltyLu\DesignPatterns\Builder;

/**
 * 1.抽象建造者(Builder)角色
 * Interface Builder
 * @package LoyaltyLu\DesignPatterns\Builder
 */
interface Builder
{
    //创建部件A 比如创建汽车发动机
    public function buildPartA();

    //创建部件B 比如创建汽车底盘
    public function buildPartB();

    //创建部件C 比如创建汽车变速箱
    public function buildPartC();

    // 其他的一些零件
    public function buildOthers();

    /**
     * 返回最后组装成品结果 (返回最后装配好的汽车)，
     * 成品的组装过程不在这里进行,而是转移到下面的Director类中进行，
     * 从而实现了解耦过程和部件。
     * return Product
     */
    public function getCar();
}