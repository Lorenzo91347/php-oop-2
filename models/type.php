<?php

class Type{
    private $type;

    public function __construct($_type){
        $this->set_type($_type);
    }

    public function get_type(){
        return $this ->type;
    }
    public function set_type($_type){
        $this->type = $_type;
    }
}