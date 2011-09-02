<?php

class App_Controller_AdminController extends MVC_Controller_Abstract
{

    public function indexAction()
    {
        $params = $this->getRequest()->getParams();
        //var_dump($params);
        
        MVC_Session::getInstance();//->init();
        //
        MVC_Session::getInstance()->set('auth', 1);
        
        var_dump(MVC_Session::getInstance()->get('auth'));
//$model = new App_Model_PageModel();
        //$this->getView()->assign('data', );
        //$this->getView()->assign('name', 'Vredniy');
    }

}