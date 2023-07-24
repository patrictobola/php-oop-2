<?php
class Food extends Products
{
    private $weight;
    private $ingredients;

    public function __construct($name, $price, $animal, $img_path, $weight, $ingredients)
    {
        parent::__construct($name, $price, $animal, $img_path);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
