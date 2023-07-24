<?php
class Products
{
    public $name;
    public $animal;
    private $price;

    public function __construct($name, $animal, $price)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->price = $price;
    }
}
