<?php

class MVC_Registry
{

    /**
     * Singleton registry instance
     * @var Singleton registry instance
     */
    static private $_instance = null;
    /**
     * Hash table
     * @var array
     */
    private $_registry = array();

    /**
     * Get Registry instanse
     * 
     * @return Singleton registry instance
     */
    static public function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * Save an object by key into registry
     * 
     * @param integer|string $key
     * @param object $object
     * @return void
     */
    static public function set($key, $object)
    {
        self::getInstance()->_registry[$key] = $object;
    }

    /**
     * Get an object by key from registry
     * 
     * @param integer|string $key
     * @return object
     */
    static public function get($key)
    {
        return self::getInstance()->_registry[$key];
    }

    private function __construct()
    {
        
    }

    private function __clone()
    {
        
    }

}

