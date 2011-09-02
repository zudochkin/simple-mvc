<?php

require_once 'MVC/Autoload/Interface.php';
require_once 'MVC/Autoload/Default.php';

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
    
    public static function registerAutoload($autoloader = null)
    {
        if ($autoloader instanceof MVC_Autoload_Interface) {
            self::$_autoloaders[] = $autoloader;
        } elseif (!$autoloader) {
            self::$_autoloaders[] = new MVC_Autoload_Default();
        } else {
            throw new MVC_Exception('Autoloader must be null or implements MVC_Autoload_Interface');
        }
        //self::$_autoloaders[] = $autoloader;
    }

}