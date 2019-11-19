<?php


namespace LoyaltyLu\DesignPatterns\Factory\OptimizeAbstractFactory;

use ReflectionClass;
use ReflectionException;

class FactoryWithReflection
{
    /**
     * @var mixed|string
     */
    public $create = "Man";

    /**
     * FactoryWithReflection constructor.
     * @param string $create
     */
    public function __construct($create = 'Man')
    {
        $this->create = $create;
    }

    /**
     * @return object
     */
    public function createHuMan()
    {
        $className = __NAMESPACE__ . '\\' . $this->create;
        try {
            $class = new ReflectionClass($className);
            $human = $class->newInstance();
        } catch (ReflectionException $Exception) {
            throw new \InvalidArgumentException($Exception->getMessage());
        }
        return $human;
    }

    /**
     * @return object
     */
    public function createMonkey()
    {
        $className = __NAMESPACE__ . '\\' . $this->create . "Monkey";
        try {
            $class = new ReflectionClass($className);
            $monkey = $class->newInstance();
        } catch (ReflectionException $Exception) {
            throw new \InvalidArgumentException($Exception->getMessage());
        }
        return $monkey;
    }

}