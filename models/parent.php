<?php

class Product{
    public $name;
    public $available;

    public function __construct($_name,$_available){
        $this ->name = $_name;
        $this ->available = $_available;

    }
    
        
    
    public function Echo(){
        echo 'hello';
    }
}