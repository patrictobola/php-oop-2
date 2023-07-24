<?php
class Accessories extends Products
{
    public $materials;
    public $dimensions;

    public function __construct($name, $price, $animal, $img_path, $materials, $dimensions)
    {
        parent::__construct($name, $price, $animal, $img_path);
        $this->materials = $materials;
        $this->dimensions = $dimensions;
    }
}
