<?php 
require_once __DIR__ . "/Prodotti.php";

class Toy extends Prodotti
{
    public $color;
    public $size;

    public function __construct(String $name, String $price, String $type, Category $category, String $color, String $size)
    {
        parent::__construct($name, $price, $type, $category);
        $this->color = $color;
        $this->size = $size;
    }
}
