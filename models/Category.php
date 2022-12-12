<?php 

class Category
{
    public $type;

    public function __construct(String $type)
    {
        $this->type = $type;
    }
}