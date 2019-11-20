<?php


namespace LoyaltyLu\DesignPatterns\Builder;

/**
 * 4.导演者(Director)角色
 * Class Director
 * @package LoyaltyLu\DesignPatterns\Builder
 */
class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();
        $this->builder->buildOthers();

        return $this->builder->getCar();
    }
}