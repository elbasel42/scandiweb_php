<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('product', new Route(URL_SUBFOLDER . '/product/{id}', ['controller' => 'ProductController', 'method' => 'showAction'], ['id' => '[0-9]+']));
$routes->add('homepage', new Route(URL_SUBFOLDER . '/', ['controller' => 'PageController', 'method' => 'indexAction'], []));
