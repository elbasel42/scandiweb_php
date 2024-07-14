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
            $product_type = $_POST['product_type'] ?? Null;

            //! Validation
            $error = Null;
            $error = ProductValidator::validate($_POST, $product_type);

            //* If error, stop execution and redirect back 
            //* to product add page with an error message.
            if ($error !== Null) {
                header('Location: ' . '/product/add?error=' . urlencode($error));
                die();
            }

            //* If validation pass,store the product in the database.
            try {
                Product::store(array_filter($_POST));
            } catch (\Throwable $th) {
                $errorMessage = $th->getMessage();
                header('Location: ' . '/product/add?error=' . urlencode($errorMessage));
                die();
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
