<?php
/**
 * 整合单例、工厂、注册树一起使用
 */

use LoyaltyLu\DesignPatterns\RegistryTree\RegistryTree;

include __DIR__ . '/../vendor/autoload.php';

/**
 * 单例
 * Class SingletonDemo
 */
class SingletonDemo
{
    private static $instance;
    private $content;

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    /**
     * SingletonDemo constructor.
     */
    private function __construct()
    {
        $this->content = rand(1, 9999);
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public function test()
    {
        return $this->content;
    }
}
/**
 * 工厂
 * Class Factory
 */
class Factory
{
    public static function create()
    {
        // 返回对象
        return SingletonDemo::getInstance();
    }
}
RegistryTree::set("singleton", Factory::create());
$obj = RegistryTree::get("singleton");
var_dump($obj);
echo $obj->test();