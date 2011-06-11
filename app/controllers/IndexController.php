<?php

class App_Controller_IndexController extends MVC_Controller_Abstract
{

    public function init()
    {
        
    }
    
    public function indexAction()
    {
        $this->getView()->assign('name', 'Vredniy');
    }

}