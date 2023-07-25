<?php
include_once __DIR__ . '/Categories.php';
class Products extends Categories
{
    public $name;
    public $price;
    public $img_path;

    public function __construct($name, $price, $animal, $img_path)
    {
        parent::__construct($animal);
        $this->name = $name;
        $this->price = $price;
        $this->animal = $animal;
        $this->img_path = $img_path;
    }
}
