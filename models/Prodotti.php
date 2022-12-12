<?php 

class Prodotti
{
    public $name;
    private $price;
    public $type;
    public $category;

    public function __construct(String $name, String $price, String $type, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->category = $category;
    }

    public function getPrice() {
        return $this->price ;
    }
}