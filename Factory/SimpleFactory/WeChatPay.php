<?php


namespace LoyaltyLu\DesignPatterns\Factory\SimpleFactory;


class WeChatPay implements PaySimpleFactory
{

    public function pay()
    {
        // TODO: Implement pay() method.
        echo "WeChatPay";
    }
}