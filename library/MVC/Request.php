<?php

class MVC_Request
{

    protected $_params;
    protected $_controller;
    protected $_action;

    public function __construct($options)
    {
        $this->_params = $options['params'];
        $this->_controller = $options['controller'];
        $this->_action = $options['action'];
    }

    public function getParams()
    {
        return $this->_params;
    }

    public function getController()
    {
        return $this->_controller;
    }

    public function getAction()
    {
        return $this->_action;
    }

}