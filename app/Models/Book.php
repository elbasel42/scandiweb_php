<?php

namespace App\Models;

use App\Models\Product;
use mysqli;

class Book extends Product
{
    protected $weight;

    public function __construct($sku, $title, $price, $weight)
    {

        parent::__construct($sku, $title, $price);
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function render()

    {
        $weight = $this->getWeight();
        $initialRender = parent::render();

        return "{$initialRender}<li>{$weight}</li>";
    }

    // public static function store($data)
    // 
    // {
    //     $sku = $data['sku'];
    //     $title = $data['title'];
    //     $price = $data['price'];
    //     $weight = $data['weight'];
    //     $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    //     $sql = "INSERT INTO products (sku, title, price, weight) VALUES (?, ?, ?, ?)";
    //     $connection->execute_query($sql, [$sku, $title, $price, $weight]);
    // }

}
