<?php 

class Prodotti
{
    public $name;
    private $price;
    public $category;

    public function __construct(String $name, String $price,  Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getPrice() {
        return $this->price ;
    }
}