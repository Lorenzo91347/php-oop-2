<?php



class Category extends Product{
    public $category;

    public function __construct($_name,$_available,$_category)
    {
        parent::__construct($_name,$_available);
        $this->category = $_category;
        
    }
    public function Cat(){
        
    }

};

