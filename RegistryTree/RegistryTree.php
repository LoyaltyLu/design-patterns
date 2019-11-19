<?php

namespace LoyaltyLu\DesignPatterns\RegistryTree;

/**
 * 注册树模式
 * Class RegistryTree
 * @package LoyaltyLu\DesignPatterns\RegistryTree
 */
class RegistryTree
{

    private static $objects;

    /**
     * 添加节点
     * @param $alias
     * @param $object
     */
    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    /**
     * 获取节点
     * @param $alias
     * @return bool
     */
    public static function get($alias)
    {
        if (!isset(self::$objects[$alias])) {
            return false;
        }
        return self::$objects[$alias];
    }

    /**
     * 删除节点
     * @param $alias
     * @return bool
     */
    public static function _unset($alias)
    {
        if (isset(self::$objects[$alias])) {
            unset(self::$objects[$alias]);
            return true;
        }
        return false;
    }
}