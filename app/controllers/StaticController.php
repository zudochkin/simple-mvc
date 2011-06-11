<?php

class App_Controller_StaticController extends MVC_Controller_Abstract
{

    public function init()
    {
        
    }

    public function showAction()
    {
        $this->assign('params', $this->getRequest()->getParams());
    }

}