<?php
class Products
{
    public $name;
    public $price;
    public $animal;
    public $img_path;

    public function __construct($name, $price, $animal, $img_path)
    {
        $this->name = $name;
        $this->price = $price;
        $this->animal = $animal;
        $this->img_path = $img_path;
    }
}
