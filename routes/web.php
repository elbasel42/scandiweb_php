<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route('/', ['controller' => 'HomeController', 'method' => 'index'], []));
$routes->add('add_product', new Route('/product/add', ['controller' => 'ProductController', 'method' => 'add'], []));
$routes->add('delete_products', new Route('/product/delete', ['controller' => 'ProductController', 'method' => 'delete'], []));
