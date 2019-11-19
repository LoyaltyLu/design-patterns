<?php


namespace LoyaltyLu\DesignPatterns\Factory\SimpleFactory;

/**
 * 简单工厂静态调用类
 * Class StaticFactory
 * @package LoyaltyLu\DesignPatterns\Factory\SimpleFactory
 */
class StaticFactory
{
    public static function pay($operate)
    {
        switch ($operate) {
            case 'WeChatPay':
                $result = new WeChatPay();
                break;
            case 'AliPay':
                $result = new AliPay();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的支付方式');
        }
        return $result;
    }
}