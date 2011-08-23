<?php

class MVC_Autoload_Autoloader
{
    protected static $_autoloaders = array();
    
    public static function load($class) {
        $loaded = false;
        foreach(self::$_autoloaders as $autoloader) {
            if ($classPath = $autoloader->load($class)) {
                $loaded = true;
                require_once $classPath;
                continue;
            }
                
        }
        //if (!$loaded) 
          //  throw new MVC_Autoload_Exception("Class '{$class}' cannot be found");
        
    }

    public static function registerAutoload(MVC_Autoload_Interface $autoloader)
    {
        self::$_autoloaders[] = $autoloader;
    }

}