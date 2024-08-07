<?php

namespace App\Models;

use mysqli;

class ProductValidator
{
    public static function validate($data, $product_type)
    {
        $sku = $_POST['sku'] ?? Null;
        $title = $_POST['title'] ?? Null;
        $price = $_POST['price'] ?? Null;

        //* Common Validation
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT 1 FROM products WHERE sku = ? LIMIT 1";
        $rows = $connection->execute_query($sql, [$sku])->fetch_all(MYSQLI_ASSOC);
        if (count($rows) === 1) {
            return "Sku already in database, please try another one";
        }

        if (!is_numeric($price)) {
            return "Price must be numeric";
        }
        if ($sku === Null || $title === Null || $price === Null) {
            return "Missing data, please check that all fields are filled.";
        }

        if (!in_array($product_type, ['Book', 'DVD', 'Furniture'])) {
            return 'Invalid Product Type';
        }

        //* Per type validation
        $product_class = '\\App\\Models\\' . $product_type;
        $error = $product_class::validate($data);
        return $error;
    }
}
