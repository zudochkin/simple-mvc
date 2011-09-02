<?php

class MVC_FrontController
{

    protected $_routes;
    protected $_settings;
    protected $_controller;
    protected $_action;
    protected $_params;


    public function __construct($request)
    {
        $this->_initSession();
        $this->_initConfigs();
        $this->_initResources();
        $this->_initRoutes();
    }
    
    protected function _initSession()
    {
        session_start();
    }
    

    protected function _parseRequest()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function run()
    {
        $uri = $this->_parseRequest();

        $activeRoute = $this->_checkActiveRoute($uri);
        if (null === $activeRoute)
            throw new MVC_Exception('Cannot find active route');
        $this->_dispatch($activeRoute);

        $controllerName = sprintf('App_Controller_%sController', ucfirst($this->_controller));
        $controllerObj = new $controllerName(
                        new MVC_Request(
                                array('params' => $this->_params,
                                    'controller' => $this->_controller,
                                    'action' => $this->_action)
                        )
        );
        $methodName = $this->_action . 'Action';
        if (method_exists($controllerObj, $methodName)) {
            $controllerObj->$methodName();
            $controllerObj->render();
        } else {
            throw new MVC_Exception('action not found');
        }
    }

    protected function _initConfigs()
    {

        require_once APPLICATION_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'application.php';

        MVC_Registry::getInstance()->set('settings', $settings);
        $this->_settings = $settings;
    }

    /**
     * init resource autoloading
     */
    protected function _initResources()
    {
        //spl_autoload_register(array('MVC_Autoload_Resource', 'autoload'));
        MVC_Autoload_Autoloader::registerAutoload(new MVC_Autoload_Resource());
    }

    /**
     * init routes
     */
    protected function _initRoutes()
    {
        if (isset($this->_settings['routes'])) {
            $this->_routes = $this->_settings['routes'];
        } else {
            throw new MVC_Exception('Routes must be specified');
        }
    }

    /**
     * get active route name
     * 
     * @param string $uri
     * @return string active route name
     */
    protected function _checkActiveRoute($uri)
    {
        $uri = substr($uri, 1);
        if (trim($uri)) {
            $activeRoute = null;

            foreach($this->_routes as $name => $routeSettings) {
                var_dump($routeSettings);
                if (!$routeSettings['template'])
                    continue;
                if (preg_match('@' . $routeSettings['template'] . '@', $uri, $matches)) {
                    var_dump($routeSettings['template']);
                    //if (isset($routeSettings['params'])) {
                      //  foreach($routeSettings['params'] as $paramName => $param) {
                        //    $this->_params[$paramName] = $matches[$param];
                        //}
                    //}
                    
                    $params = explode('/', $matches[0]);
                    
                    $this->_contoller = array_shift($params);
                    echo 'controller'; var_dump($this->_contoller);
                    $this->_action = array_shift($params);
                    echo 'action'; var_dump($this->_action);
                    echo 'matches';

                    $param = array();
                    do {
                        $param[array_shift($params)] = array_shift($params);
                    } while (count($params));
                    
                    
                    var_dump($param);
                    $activeRoute = $name;
                }
            }
        } else {
            $activeRoute = 'default';
        }

        return $activeRoute;
    }

    /**
     * dispatch
     *
     * @param string $activeRoute active route name
     */
    protected function _dispatch($activeRoute)
    {
        if (isset($this->_routes[$activeRoute])) {
            if (!$this->_controller)
                $this->_controller = $this->_routes[$activeRoute]['controller'];
            if (!$this->_action)
                $this->_action = $this->_routes[$activeRoute]['action'];
        }
    }

}