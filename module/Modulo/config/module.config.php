<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'controllers' => array(
        'invokables' => array(
            'Modulo\Controller\Prueba' => 'Modulo\Controller\PruebaController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'modulo' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/modulo[/[:action]]',
                    'constraints' => array(
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Modulo/Controller/Prueba',
                        'action'     => 'ver'
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            //'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'modulo/layout'           => __DIR__ . '/../view/layout/principal.phtml',
            'modulo/prueba/ver' => __DIR__ . '/../view/modulo/prueba/ver.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'modulo' => __DIR__ . '/../view',
        ),
    ),
);
