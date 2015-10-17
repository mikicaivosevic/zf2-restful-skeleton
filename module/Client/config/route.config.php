<?php
return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Client\Controller\Index'
                    ),
                ),
            ),
        ),
    ),
);