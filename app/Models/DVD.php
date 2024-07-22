<?php

namespace App\Models;

use App\Models\Product;

class DVD extends Product
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

    public static function validate($data)
    {
        $error = Null;
        $size = $data['size'] ?? Null;
        if ($size === Null || !is_numeric($size)) {
            $error = "Size must be a valid number.";
        }
        return $error;
    }

    public function getSize()
    {
        return htmlspecialchars($this->size);
    }

    public function render()

    {
        $size = $this->getSize();
        $initialRender = parent::render();
        return "{$initialRender}<li>Size: {$size}MB</li>";
    }
}
