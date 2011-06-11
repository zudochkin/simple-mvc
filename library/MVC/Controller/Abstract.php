<?php

abstract class MVC_Controller_Abstract
{

    protected $_params;
    /**
     *
     * @var MVC_Request
     */
    protected $_request;
    /**
     *
     * @var Smarty
     */
    protected $_view;

    /**
     *
     * @return Smarty
     */
    public function getView()
    {
        return $this->_view;
    }

    /**
     * insert action view in common template
     */
    public function render()
    {
        $templatePath = $this->_view->template_dir . DIRECTORY_SEPARATOR;
        $templatePath .= strtolower(
                $this->getRequest()->getController()
                . DIRECTORY_SEPARATOR
                . $this->getRequest()->getAction() . '.tpl'
        );
        if (file_exists($templatePath) && is_readable($templatePath)) {
            $this->getView()->assign('tplName', $templatePath);

            if (null === $this->_view->template)
                $this->getView()->display('template.tpl');
            else {
                $this->getView()->display($this->getView()->template);
            }
        } else {
            throw new MVC_Exception("Template '{$templatePath}' not found");
        }
    }

    /**
     * Smarty's assign
     * 
     * @param type $var
     * @param type $value 
     */
    public function assign($var, $value = null)
    {
        $this->getView()->assign($var, $value);
    }

    /**
     * init method for all actions
     */
    public function init()
    {
        
    }

    /**
     *
     * @param MVC_Request $request 
     */
    public function __construct(MVC_Request $request)
    {
        $this->_request = $request;
        $this->_initView();
        $this->init();
    }

    /**
     * get Request object
     *
     * @return MVC_Request
     */
    public function getRequest()
    {
        return $this->_request;
    }

    protected function _initView()
    {
        $view = new MVC_View(MVC_Registry::get('settings'));
        $this->_view = $view->getEngine();
    }

}