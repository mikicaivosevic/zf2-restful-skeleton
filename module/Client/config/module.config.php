<?php

return array(
    'controllers'     => array(
        'invokables' => array(
            'Client\Controller\Index' => 'Client\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    'service_manager' => array(
        'invokables'         => array(),
        'factories'          => array(),
        'abstract_factories' => array(),
        'aliases'            => array(),
        'services'           => array(),
        'initializers'       => array(),
        'shared'             => array(),
    )
);
