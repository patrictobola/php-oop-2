<?php
class Food extends Products
{
    public $weight;
    public $ingredients;

    public function __construct($name, $price, $animal, $img_path, $weight, $ingredients)
    {
        parent::__construct($name, $price, $animal, $img_path);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
