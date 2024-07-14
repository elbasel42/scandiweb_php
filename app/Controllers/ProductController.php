<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\ProductValidator;

class ProductController
{
    public function add()
    {
        $request_method = $_SERVER['REQUEST_METHOD'];
        if ($request_method === "GET") {

            $error = $_GET['error'] ?? Null;
            require_once APP_ROOT . '/app/Views/addProduct.php';
        } elseif ($request_method === "POST") {

            //* Handle add product, get all POST data
            $sku = $_POST['sku'] ?? Null;
            $title = $_POST['title'] ?? Null;
            $price = $_POST['price'] ?? Null;
            $product_type = $_POST['product_type'] ?? Null;
            $weight = $_POST['weight'] ?? Null;
            $size = $_POST['size'] ?? Null;
            $length = $_POST['length'] ?? Null;
            $height = $_POST['height'] ?? Null;
            $width = $_POST['width'] ?? Null;

            //! Validation
            $error = Null;
            $error = ProductValidator::validate($_POST, $product_type);

            //* If error, stop execution and redirect back 
            //* to product add page with an error message.
            if ($error !== Null) {
                header('Location: ' . '/product/add?error=' . urlencode($error));
                die();
            }

            //* If no errors,store the product in the database.
            try {
                Product::store([
                    'sku' => $sku,
                    'title' => $title,
                    'product_type' => $product_type,
                    // convert numeric strings to floats
                    'price' => (float)$price,
                    'weight' => (float)$weight,
                    'length' => (float)$length,
                    'height' => (float)$height,
                    'width' => (float)$width,
                    'size' => (float) $size
                ]);
            } catch (\Throwable $th) {
                $errorCode =  $th->getCode();
                //* check for duplicate sku in the database.
                if ($errorCode === 1062) {
                    header('Location: ' . '/product/add?error=' . urlencode("Sku already in database, please try another one"));
                    die();
                }
            }
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
