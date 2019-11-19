<?php

use LoyaltyLu\DesignPatterns\RegistryTree\RegistryTree;

include __DIR__ . '/../vendor/autoload.php';

/**
 * 注册树调用
 * Class Demo
 */
class Demo
{
    public function index()
    {
        echo "我是一个节点".PHP_EOL;
    }
}

$demo = new Demo();
var_dump($demo);
$demo->index();

// 添加进对象树中
RegistryTree::set("demo", $demo);
// 获取对象
$demo2 = RegistryTree::get("demo");
var_dump($demo2);
$demo2->index();
// 删除对象
RegistryTree::_unset("demo");
// 再次获取
$demo_obj = RegistryTree::get("demo");
var_dump($demo_obj);
//$demo_obj->index();