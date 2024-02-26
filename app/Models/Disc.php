<?php

namespace App\Models;

use App\Models\Product;

class Disc extends Product
{
    protected $size;

    public function __construct($data)
    {
        $id = $data['id'];
        $sku = $data['sku'];
        $title = $data['title'];
        $price = $data['price'];
        $size = $data['size'];

        parent::__construct($id, $sku, $title, $price);
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function render()

    {
        $size = $this->getSize();
        $initialRender = parent::render();

        return "{$initialRender}<li>Size: {$size}MB</li>";
    }
}
