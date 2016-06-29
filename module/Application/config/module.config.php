<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

return array(
    'router' => array(
        'routes' => array(


            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),

                      'home-2' => array(
                          'type' => 'Zend\Mvc\Router\Http\Literal',
                          'options' => array(
                              'route'    => '/home',
                              'defaults' => array(
                                  'controller' => 'Application\Controller\Index',
                                  'action'     => 'index',
                              ),
                          ),
                      ),

                      'home-3' => array(
                          'type' => 'Zend\Mvc\Router\Http\Literal',
                          'options' => array(
                              'route'    => '/home/',
                              'defaults' => array(
                                  'controller' => 'Application\Controller\Index',
                                  'action'     => 'index',
                              ),
                          ),
                      ),

            'freelancers' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/freelancers',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Freelancers',
                        'action'     => 'index',
                    ),
                ),
            ),

                        'freelancers-2' => array(
                            'type' => 'Zend\Mvc\Router\Http\Literal',
                            'options' => array(
                                'route'    => '/freelancers/',
                                'defaults' => array(
                                    'controller' => 'Application\Controller\Freelancers',
                                    'action'     => 'index',
                                ),
                            ),
                        ),

                        'freelancers-resp' => array(
                            'type' => 'Zend\Mvc\Router\Http\Literal',
                            'options' => array(
                                'route'    => '/freelancers/response',
                                'defaults' => array(
                                    'controller' => 'Application\Controller\Freelancers',
                                    'action'     => 'response',
                                ),
                            ),
                        ),


            'freelancers-profiles' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/profile',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Freelancers',
                        'action'     => 'profile',
                    ),
                ),
            ),





             'sign-up' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/sign-up',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Sign-up',
                        'action'     => 'index',
                    ),
                ),
            ),
                      'sign-up-2' => array(
                         'type' => 'Zend\Mvc\Router\Http\Literal',
                         'options' => array(
                             'route'    => '/sign-up/',
                             'defaults' => array(
                                 'controller' => 'Application\Controller\Sign-up',
                                 'action'     => 'index',
                             ),
                         ),
                     ),


             'login' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/login',
                    'defaults' => array(
                        'controller' => 'Application\Controller\login',
                        'action'     => 'index',
                    ),
                ),
            ),
                      'login-2' => array(
                         'type' => 'Zend\Mvc\Router\Http\Literal',
                         'options' => array(
                             'route'    => '/login/',
                             'defaults' => array(
                                 'controller' => 'Application\Controller\login',
                                 'action'     => 'index',
                             ),
                         ),
                     ),


                     'logout' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route'    => '/logout',
                            'defaults' => array(
                                'controller' => 'Application\Controller\logout',
                                'action'     => 'index',
                            ),
                        ),
                    ),




            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => Controller\IndexController::class,
            'Application\Controller\Freelancers' => Controller\FreelancersController::class,
            'Application\Controller\SignUp' => Controller\SignUpController::class,
            'Application\Controller\Login' => Controller\LoginController::class,
            'Application\Controller\Logout' => Controller\LogoutController::class,

        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
           'ViewJsonStrategy',
       ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
