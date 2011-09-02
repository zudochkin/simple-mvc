<?php

define('APPLICATION_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'app'));
define('LIBRARY_PATH', realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library'));
set_include_path(implode(DIRECTORY_SEPARATOR, array(
            realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library'),
            get_include_path()
        )));

require_once 'MVC/Autoload/Autoloader.php';

MVC_Autoload_Autoloader::registerAutoload();


spl_autoload_register(array('MVC_Autoload_Autoloader', 'load'));


//require 'MVC_FrontController.php';

$frontController = new MVC_FrontController($_SERVER);
$frontController->run();