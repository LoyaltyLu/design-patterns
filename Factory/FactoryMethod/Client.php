<?php
include __DIR__ . '/../../vendor/autoload.php';
use LoyaltyLu\DesignPatterns\Factory\FactoryMethod\FactoryAli;
use LoyaltyLu\DesignPatterns\Factory\FactoryMethod\FactoryWeChat;


/**
 * 5.外界通过调用具体工厂类的方法，从而创建不同具体产品类的实例
 * Class Client
 * @package LoyaltyLu\DesignPatterns\Factory\FactoryMethod
 */
class Client
{
    public function index()
    {
        $factory = new FactoryAli();
        $ali = $factory->create();
        $ali->pay();
        $factory = new FactoryWeChat();
        $weChat = $factory->create();
        $weChat->pay();
    }
}

$demo = new Client;
$demo->index();