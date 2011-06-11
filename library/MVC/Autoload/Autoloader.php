<?php

class MVC_Autoload_Autoloader
{

    public static function autoload($className)
    {
        
        $className = str_replace('_', '/', $className);
        $classPath = LIBRARY_PATH . DIRECTORY_SEPARATOR . $className . '.php';
        if (file_exists($classPath) && is_readable($classPath)) {
            require_once $classPath;
        } else {
            //throw new MVC_Exception("Class name '{$className}' not found");
        }
        //echo $classPath;
    }

    public static function registerAutoload()
    {
        
    }

}