<?php

namespace App\Controllers;

use App\Models\Product;

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
            $productType = $_POST['product_type'] ?? Null;
            $weight = $_POST['weight'] ?? Null;
            $length = $_POST['length'] ?? Null;
            $height = $_POST['height'] ?? Null;
            $width = $_POST['width'] ?? Null;
            $size = $_POST['size'] ?? Null;

            //! Validation
            $error = Null;
            //* Valid product type
            if (!in_array($productType, ['Book', 'Disc', 'Furniture'])) {
                $error = 'Invalid Product Type';
            }

            //* Required attributes
            if ($sku === Null || $title === Null || $price === Null) {
                $error = "Missing data, please check that all fields are filled.";
            }

            //* price must be numeric
            if (!is_numeric($price)) {
                $error = "Price must be numeric";
            }

            //* Valid weight if product is a book.
            if ($productType === "Book" && ($weight === Null || !is_numeric($weight))) {
                $error = "Weight must be a valid number.";
            }

            //* Valid size if the product is a disc.
            if ($productType === 'Disc' && ($size === Null || !is_numeric($size))) {
                $error = "Size must be a valid number.";
            }

            //* Valid dimensions if product is a piece of furniture.
            if ($productType === "Furniture" && (($length === Null || !is_numeric($length) || ($width === Null || !is_numeric($width)) || ($height === Null || !is_numeric($height))))) {
                $error = "Dimensions must be valid numbers";
            }

            //* If error, stop execution and redirect back 
            //* to product add page with an error message.
            if ($error !== Null) {
                header('Location: ' . '/product/add?error=' . urlencode($error));
                die();
            }

            //* If no errors,store the product in the database.
            Product::store([
                'sku' => $sku,
                'title' => $title,
                'product_type' => $productType,
                // convert numeric string to float
                'price' => (float)$price,
                'weight' => (float)$weight,
                'length' => (float)$length,
                'height' => (float)$height,
                'width' => (float)$width,
                'size' => (float) $size
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
