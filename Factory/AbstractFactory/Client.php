<?php

use LoyaltyLu\DesignPatterns\Factory\AbstractFactory\ManFactory;

include __DIR__ . '/../../vendor/autoload.php';

//namespace LoyaltyLu\DesignPatterns\Factory\AbstractFactory;


class Client
{
    public function index()
    {
        $factory = new ManFactory();
        $man = $factory->createHuMan();
        $man->say();
        $monkey = $factory->createMonkey();
        $monkey->say();
//        echo "*****************\n";
//        $factory = new WoManFactory();
//        $woman = $factory->createHuMan();
//        $woman->say();
//        $woman_monkey = $factory->createMonkey();
//        $woman_monkey->say();
    }
}
// 执行
$demo = new Client;
$demo->index();