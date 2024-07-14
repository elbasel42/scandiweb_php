<?php

namespace App\Models;

class ProductValidator
{
    public static function validate($data, $product_type)
    {
        $error = Null;

        $sku = $_POST['sku'] ?? Null;
        $title = $_POST['title'] ?? Null;
        $price = $_POST['price'] ?? Null;

        //* Common Validation
        if (!is_numeric($price)) {
            $error = "Price must be numeric";
        }
        if ($sku === Null || $title === Null || $price === Null) {
            $error = "Missing data, please check that all fields are filled.";
        }

        if (!in_array($product_type, ['Book', 'DVD', 'Furniture'])) {
            $error = 'Invalid Product Type';
        }

        if ($error !== Null) return $error;

        //* Per type validation
        $product_class = '\\App\\Models\\' . $product_type;
        $error = $product_class::validate($data);

        if ($error !== Null) return $error;
        return Null;
    }
}
