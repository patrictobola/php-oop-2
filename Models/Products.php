<?php
class Products
{
    public $name;
    public $animal;
    private $price;

    public function __construct($name, $price, $animal = null)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->price = $price;
    }
}
