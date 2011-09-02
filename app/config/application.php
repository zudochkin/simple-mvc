<?php

$settings = array(
    'application' => array(
        'applicationName' => 'first application'
    ),
    'routes' => array(
    
        'default' => array(
            'template' => '^[^/]{1,}/[^/]{1,}/([^/]{1,}/[^/]{1,})*$',
            'controller' => 'index',
            'action' => 'index',
            'params' => array(
                'param1' => 1,
                'param2' => 2
            )
        ),
        'static' => array(
            'template' => '^(\w+)\.html$',
            'controller' => 'static',
            'action' => 'show',
            'params' => array(
                'name' => 1
            )
        ),
        'main' => array(
            'template' => null,
            'controller' => 'index',
            'action' => 'index'
        ),
        'dynamic' => array(
            'template' => '^(\w+)\/(\w+)$',
            'controller' => 'dynamic',
            'action' => 'show',
            'params' => array(
                'category' => 1,
                'article' => 2
            )
        ),
        'admin' => array(
            'template' => '^admin\/(.*)$',
            'controller' => 'admin',
            'action' => 'index',
            'params' => array(
                'page' => 1
            )
        )
    ),
    'view' => array(
        'viewPath' => APPLICATION_PATH . DIRECTORY_SEPARATOR . 'views',
        'template' => 'template.tpl'
    ),
    'database' => array(
        'adapter' => 'mysql',
        'params' => array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'mymvc'
        )
    )
);