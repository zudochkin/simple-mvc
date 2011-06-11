<?php

class App_Controller_DynamicController extends MVC_Controller_Abstract
{

    public function init()
    {
        
    }

    public function showAction()
    {
        $params = $this->getRequest()->getParams();
        $this->assign('category', $params['category']);
        $this->assign('article', $params['article']);
    }

}