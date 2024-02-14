<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class HomeController
{
    // Homepage action
    public function index()
    {
        // $routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());

        $allProducts = Product::getAllProducts();


        require_once APP_ROOT . '/Views/home.php';
    }
}
