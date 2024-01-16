<?php

require_once __DIR__.'/models/parent.php';

class Category extends Product{
    public $category;

    public function __construct($_category)
    {
        $this->category = $_category;
        
    }
}

