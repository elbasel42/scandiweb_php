<?php

namespace App\Models;

class Product
{
    protected $id;


    public function __construct(protected int $sku, protected $title, protected $price)
    {
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


    public static function getAllProducts()
    {
        return [
            new Product(1, 'hello', 22)
        ];
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
    }

    // public function read(int $id)
    public function read()
    {
        $this->title = 'My first Product';
        $this->price = 2.56;
        $this->sku = 'MVC-SP-PHP-01';

        return $this;
    }

    public function update(int $id, array $data)
    {
    }

    public function delete(int $id)
    {
    }
}
