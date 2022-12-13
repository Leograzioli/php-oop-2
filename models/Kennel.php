<?php

require_once __DIR__ . "/Prodotti.php";

class Kennel extends Prodotti
{
    public $material;
    public $size;

    public function __construct(String $name, String $price, Category $category, String $material, String $size)
    {
        parent::__construct($name, $price, $category);
        $this->material = $material;
        $this->size = $size;
    }
}