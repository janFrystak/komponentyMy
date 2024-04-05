<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::getKompType');
$routes->get("ComponentExamples/(:num)", "Main::getKompInfo/$1");
$routes->get("ComponentyTypy/(:num", "Main::getKompInfo/$1");
