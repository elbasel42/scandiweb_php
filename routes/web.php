<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('add_product', new Route(URL_SUBFOLDER . '/product/add', ['controller' => 'ProductController', 'method' => 'add'], []));
$routes->add('homepage', new Route(URL_SUBFOLDER . '/', ['controller' => 'HomeController', 'method' => 'index'], []));
