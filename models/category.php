<?php



class Category{
    public $category;
    

    public function __construct($_category)
    {
        

       $this->set_category($_category);
       
    }

    //Get

    public function get_category(){
        return $this ->category;
    }
    

    //Set

    public function set_category($_category){
        $this->category = $_category;
    }
  

};

