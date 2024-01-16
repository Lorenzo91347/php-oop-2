<?php
require_once __DIR__.'/child.php';
$min = 1;
$max = 5;

class Product{
    public $name;
    public $available;
    public $approved;

    public function __construct($_name,$_available,$_approved,){
        $this->name = $_name;
        $this->available = $_available;
        $this->approved = $_approved;

    }
    
        
    
    public function Echo(){
        if($this->approved == true){
            $this->available = rand(1,5);
        }
        else{
            $this->available = 0;
        }
      
    }
};