<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction(int $id, RouteCollection $routes)
    {
        $product = new Product();
        $product->read($id);

        require_once APP_ROOT . '/Views/product.php';
    }
    public function addAction(RouteCollection $routes)
    {
        $request_method = $_SERVER['REQUEST_METHOD'];
        if ($request_method === "GET") {
            require_once APP_ROOT . '/Views/addProduct.php';
        } elseif ($request_method === "POST") {

            echo $_POST['name'];
        }
    }
}
