<?php

use LoyaltyLu\DesignPatterns\Factory\OptimizeAbstractFactory\FactoryWithReflection;

include __DIR__ . '/../../vendor/autoload.php';



class Client
{
    public function index()
    {
        $factory = new FactoryWithReflection('Man');
        $human = $factory->createHuMan();
        $human->say();
        $monkey = $factory->createMonkey();
        $monkey->say();
        $factory = new FactoryWithReflection('ManMonkey');
        $monkey = $factory->createHuMan();
        $monkey->say();
    }
}
// 执行
$demo = new Client;
$demo->index();