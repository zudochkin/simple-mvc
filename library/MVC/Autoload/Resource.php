<?php

class MVC_Autoload_Resource implements MVC_Autoload_Interface
{

    protected static $_resources = array(
        'controller' => '@App_Controller_(\w+)Controller@', // контроллеры
        'model' => '@App_Model_(\w+)@' // модели
    );

    public static function load($className)
    {
        $loaded = false;
        foreach(self::$_resources as $resource => $path) {
            if (ucfirst($resource) == substr($className, -strlen($resource))) {
                if (preg_match(self::$_resources[$resource], $className, $matches)) {
                    return self::loader($matches[1], $resource);
                }
            }
        }
        return $loaded;
    }

    protected static function loader($name, $resourceType)
    {
        $classPath = null;
        switch ($resourceType) {
            case 'controller':
                $classPath = APPLICATION_PATH . DIRECTORY_SEPARATOR
                        . 'controllers' . DIRECTORY_SEPARATOR
                        . "{$name}Controller.php";


                break;
            case 'model':
                $classPath = APPLICATION_PATH . DIRECTORY_SEPARATOR
                        . 'models' . DIRECTORY_SEPARATOR
                        . "{$name}.php";
                break;

            default:
                break;
        }
        return $classPath;
    }

}