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
            // $className = '\\App\\Models\\' . $productType;
            // $className::create([
            $sku = $_POST['sku'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $weight = $_POST['weight'] ?? Null;
            $length = $_POST['length'] ?? Null;
            $height = $_POST['height'] ?? Null;
            $width = $_POST['width'] ?? Null;
            $size = $_POST['size'] ?? Null;
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
            // echo "saved";
            // sleep(3);
            header('Location: ' . '/');
            // die();
        }
    }

    function delete()
    {
        // use post via javascript;
        // $ids_to_delete = $_POST['delete'];
        // var_dump($ids_to_delete);
        // var_dump($_POST);
        foreach ($_POST as $id => $value) {

            Product::delete($id);
        }
        header('Location: ' . '/');
    }
}
