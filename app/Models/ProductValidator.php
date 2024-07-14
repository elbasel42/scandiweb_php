<?php

namespace App\Models;

use mysqli;

class ProductValidator
{
    public static function validate($data, $product_type)
    {
        $error = Null;

        $sku = $_POST['sku'] ?? Null;
        $title = $_POST['title'] ?? Null;
        $price = $_POST['price'] ?? Null;

        //* Common Validation
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT 1 FROM products WHERE sku = '$sku' LIMIT 1";
        $rows = $connection->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
        if (count($rows) === 1) {
            $error = "Sku already in database, please try another one";
            return $error;
        }

        if (!is_numeric($price)) {
            $error = "Price must be numeric";
            return $error;
        }
        if ($sku === Null || $title === Null || $price === Null) {
            $error = "Missing data, please check that all fields are filled.";
            return $error;
        }

        if (!in_array($product_type, ['Book', 'DVD', 'Furniture'])) {
            $error = 'Invalid Product Type';
            return $error;
        }

        //* Per type validation
        $product_class = '\\App\\Models\\' . $product_type;
        $error = $product_class::validate($data);
        return $error;
    }
}
