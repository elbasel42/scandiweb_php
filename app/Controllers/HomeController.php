<?php

namespace App\Controllers;

use App\Models\Product;


class HomeController
{
    // Homepage action
    public function index()
    {
        $allProducts = Product::getAllProducts();
        require_once APP_ROOT . '/Views/home.php';
    }
}
