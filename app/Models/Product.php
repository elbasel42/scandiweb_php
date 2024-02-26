<?php

namespace App\Models;

use mysqli;

class Product
{
    public function __construct(protected int $id, protected string $sku, protected string $title, protected float $price)

    {
    }

    public function render()
    {
        return "<li class='product-id'>{$this->getId()}</li><li>{$this->getSku()}</li><li>{$this->getTitle()}</li><li>{$this->getPrice()}$</li>";
    }

    public static function store($data)
    {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $keys = [];
        $values = [];
        $question_marks_string = implode(', ', array_fill(0, count($data), '?'));
        foreach ($data as $k => $v) {
            array_push($keys, $k);
            array_push($values, $v);
        }
        $keys_string = implode(', ', $keys);
        $sql = "INSERT INTO products ($keys_string) VALUES ($question_marks_string)";
        $connection->execute_query($sql, [...$values]);
        $connection->close();
    }

    public static function getAllProducts()
    {
        $products = [];
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT * from products";
        $rows = $connection->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

        foreach ($rows as $r) {
            $productType = $r['product_type'];
            $productClass = '\\App\\Models\\' . $productType;
            array_push($products, new $productClass($r));
        }
        $connection->close();
        return $products;
    }

    public static function delete($id)
    {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "DELETE FROM products WHERE id = ?";
        $connection->execute_query($sql, [$id]);
        $connection->close();
    }

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function getSku()
    {
        return $this->sku;
    }

    // SET METHODS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }


    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }
}
