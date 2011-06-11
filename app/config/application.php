<?php

$settings = array(
    'application' => array(
        'applicationName' => 'first application'
    ),
    'routes' => array(
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
        )
    ),
    'view' => array(
        'viewPath' => APPLICATION_PATH . DIRECTORY_SEPARATOR . 'views',
        'template' => 'template.tpl'
    )
);