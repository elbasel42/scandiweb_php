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
            $productType = $_POST['product_type'];
            $sku = $_POST['sku'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $weight = $_POST['weight'];
            $length = $_POST['length'];
            $height = $_POST['height'];
            $width = $_POST['width'];
            $size = $_POST['size'] ?? Null;
            if ($size === Null) {
                header('Location: ' . '/product/add?error="invalid size"');
                die();
            }
            Product::store([
                'sku' => $sku,
                'title' => $title,
                'price' => $price,
                'product_type' => $productType,
                'weight' => (float)$weight,
                'length' => (float)$length,
                'height' => (float)$height,
                'width' => (float)$width,
                'size' => (float)$size
            ]);
            header('Location: ' . '/');
        }
    }

    function delete()
    {
        foreach ($_POST as $id => $value) {

            Product::delete($id);
        }
        header('Location: ' . '/');
    }
}
