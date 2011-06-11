<?php

class MVC_Autoload_Resource
{

    protected static $_resources = array(
        'controller' => '@App_Controller_(\w+)Controller@',
    );

    public static function autoload($className)
    {
        foreach(self::$_resources as $resource => $path) {
            if (ucfirst($resource) == substr($className, -strlen($resource))) {
                if (preg_match(self::$_resources[$resource], $className, $matches)) {
                    self::load($matches[1], $resource);
                }
            }
        }
    }

    protected static function load($name, $resourceType)
    {
        switch ($resourceType) {
            case 'controller':
                require_once APPLICATION_PATH . DIRECTORY_SEPARATOR
                        . 'controllers' . DIRECTORY_SEPARATOR
                        . "{$name}Controller.php";


                break;

            default:
                break;
        }
    }

}