<?php

namespace App\Models;

use App\Models\Book;
use mysqli;

class Product
{
    public function __construct(protected int $sku, protected $title, protected $price)

    {
    }

    public function render()
    {

        return "<li>{$this->getSku()}</li><li>{$this->getTitle()}</li><li>{$this->getPrice()}</li>";
    }
    // abstract static function store(array $data);
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
    }

    public static function getAllProducts()
    {
        $products = [];
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "SELECT * from products";
        $rows = $connection->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $r) {
            $productType = $r['type'];
            $productClass = '\\App\\Models\\' . $productType;
            unset($r['id']);
            unset($r['type']);
            unset($r['size']);
            array_push($products, new $productClass(...$r));
        }
        return $products;
    }


    // GET METHODS

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




    public function delete(int $id)
    {
    }

    // public function read(int $id)
    // public function read()
    // {
    // $this->title = 'My first Product';
    // $this->price = 2.56;
    // $this->sku = 'MVC-SP-PHP-01';
    // 
    // return $this;
    // }

    // public function update(int $id, array $data)
    // {
    // }

}
