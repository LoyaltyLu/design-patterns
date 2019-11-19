<?php
include __DIR__ . '/../../vendor/autoload.php';

use LoyaltyLu\DesignPatterns\Factory\SimpleFactory\SimpleFactory;
use LoyaltyLu\DesignPatterns\Factory\SimpleFactory\StaticFactory;


#简单工厂静态调用
$pay = StaticFactory::pay("AliPay");
$pay->pay();

#简单工厂实例化调用
$factory = new SimpleFactory();
$pay2 = $factory->pay("AliPay");
$pay2->pay();
