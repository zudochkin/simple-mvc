<?php

class MVC_View
{

    /**
     *
     * @var Smarty
     */
    protected $_engine;

    public function __construct($options)
    {
        require_once LIBRARY_PATH . DIRECTORY_SEPARATOR . 'Smarty' . DIRECTORY_SEPARATOR . 'Smarty.class.php';
        $this->_engine = new Smarty();


        $options = $options['view'];
        if (isset($options['viewPath']) && is_dir($options['viewPath'])) {
            $this->_engine->template_dir = $options['viewPath'];
        } else
            throw new MVC_Exception("Template dir '{$options['viewPath']}' not found");

        if (isset($options['template'])) {
            $this->_engine->template = $options['template'];
        }


        //$this->_engine->template_dir = APPLICATION_PATH . DIRECTORY_SEPARATOR . 'views';
        $this->_engine->compile_dir = APPLICATION_PATH . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'template_c';
        $this->_engine->allow_php_templates = false;

        //$this->_engine->display('index/index.php');
    }

    public function getEngine()
    {
        return $this->_engine;
    }

    public function getTemplateDir()
    {
        return $this->_engine->template_dir;
    }

}