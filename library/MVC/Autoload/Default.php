<?php
require_once 'Interface.php';

class MVC_Autoload_Default implements MVC_Autoload_Interface
{
    public static function load($className) {
        $className = str_replace('_', '/', $className);
        $classPath = LIBRARY_PATH . DIRECTORY_SEPARATOR . $className . '.php';
        if (file_exists($classPath) && is_readable($classPath)) {
            return $classPath;
        } else 
            return false;
    }
}