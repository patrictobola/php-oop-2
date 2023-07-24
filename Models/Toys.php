<?php
class Toys extends Products
{
    public $features;
    public $dimensions;

    public function __construct($name, $price, $animal, $img_path, $features, $dimensions)
    {
        parent::__construct($name, $price, $animal, $img_path);
        $this->features = $features;
        $this->dimensions = $dimensions;
    }
}
