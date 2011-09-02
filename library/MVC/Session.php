<?php

class MVC_Session
{

    static $_instance;
    protected $_vars;

    static public function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        self::$_instance->init();
        return self::$_instance;
    }

    public function init()
    {
        
        foreach($_SESSION as $key => $value) {
            $this->_vars[$key] = $value;
        }
    }

    public function get($key)
    {
        if (isset($this->_vars[$key]))
            return $this->_vars[$key];
    }
    
    public function set($key, $value) {
        $this->_vars[$key] = $value;
    }

}