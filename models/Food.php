<?php
require_once __DIR__ . "/Prodotti.php";

class Food extends Prodotti
{
    public $ingredients;
    public $kg;

    public function __construct(String $name, String $price, Category $category, String $ingredients, String $kg)
    {
        parent::__construct($name, $price, $category);
        $this->ingredients = $ingredients;
        $this->kg = $kg;
    }
}
