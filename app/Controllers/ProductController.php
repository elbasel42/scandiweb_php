<?php

namespace App\Controllers;

use App\Models\Product;
// use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
    // public function showAction(int $id, RouteCollection $routes)
    public function add()
    {
        $request_method = $_SERVER['REQUEST_METHOD'];
        if ($request_method === "GET") {
            require_once APP_ROOT . '/Views/addProduct.php';
        } elseif ($request_method === "POST") {
            $productType = $_POST['type'];
            // $className = '\\App\\Models\\' . $productType;
            // $className::create([
            $title = $_POST['name'];
            Product::store([
                'sku' => 1,
                'title' => $title,
                'price' => 2,
                'weight' => 5,
                'type' => $productType
            ]);
            // echo "saved";
            // sleep(3);
            header('Location: ' . '/');
            // die();
        }
    }
    
    function delete() {
        // use post via javascript;
        $ids_to_delete = $_POST['delete'];
    }
}
