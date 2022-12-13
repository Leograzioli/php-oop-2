<?php 

class Category
{
    public function __construct(public string $type)
    {
        $this->type = $type;
    }
}