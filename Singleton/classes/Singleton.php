<?php

namespace classes;

class Singleton
{

    protected static array $instances = []; // Protected, so we can inherit from this class to add more Singleton objects

    protected function __construct() {} // Prohibit instantiation

    protected function __clone() {} // Prohibit cloning

    public static function getInstance()
    {
        $singleton_class = static::class;
        if (!isset(self::$instances[$singleton_class])) {
            self::$instances[$singleton_class] = new static();
        }
        return self::$instances[$singleton_class];
    }

}