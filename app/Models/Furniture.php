<?php

namespace App\Models;

use App\Models\Product;

class Furniture extends Product
{
    protected $height;
    protected $length;
    protected $width;

    public function __construct($data)
    {
        $id = $data['id'];
        $sku = $data['sku'];
        $title = $data['title'];
        $price = $data['price'];
        $height = $data['height'];
        $length = $data['length'];
        $width = $data['width'];

        parent::__construct($id, $sku, $title, $price);
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function render()

    {
        $height = $this->getHeight();
        $length = $this->getLength();
        $width = $this->getWidth();
        $initialRender = parent::render();

        return "{$initialRender}<li>Dimensions: {$length}x{$width}x{$height}</li>";
    }
}
