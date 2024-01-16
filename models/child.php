<?php



class Category extends Product{
    public $category;

    public function __construct($_name,$_available,$_approved,$_category)
    {
        parent::__construct($_name,$_available,$_approved);
        $this->category = $_category;
        
    }


};

