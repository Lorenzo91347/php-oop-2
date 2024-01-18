<?php



class Product{
    public $name;
    public $available;
    public $price;
    public $quantity;

    public function __construct($_name,$_available,$_price,$_quantity){
      $this->set_name($_name);
      $this->set_available($_available);
      $this->set_price($_price);
      $this->set_quantity($_quantity);

    }

    //Get

    public function get_name(){
        return $this->name;
    } 
    public function get_available(){
        return $this->available;
    } 
    public function get_price(){
        return $this->price;
    }
    public function get_quantity(){
        return $this->quantity;
    }
    
    //Sets
    
    
    public function set_name($_name){
        $this->name = $_name;
    }
    public function set_available($_available){
        $this->available = $_available;
    }
    public function set_price($_price){
        $this->price = $_price;
    }
    public function set_quantity($_quantity){
        $this->quantity = $_quantity;
    }
    
};