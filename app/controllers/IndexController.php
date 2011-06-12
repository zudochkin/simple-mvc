<?php

class App_Controller_IndexController extends MVC_Controller_Abstract
{

    public function indexAction()
    {
        $model = new App_Model_PageModel();
        $this->getView()->assign('data', $model->getPage(1));
        $this->getView()->assign('name', 'Vredniy');
    }

}