<?php

namespace App\Models;

use App\Models\Product;

class Book extends Product
{
    protected $weight;

    public function __construct($data)
    {
        $id = $data['id'];
        $sku = $data['sku'];
        $title = $data['title'];
        $price = $data['price'];
        $weight = $data['weight'];

        parent::__construct($id, $sku, $title, $price);
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

        return "{$initialRender}<li>Weight: {$weight}KG</li>";
    }
}
