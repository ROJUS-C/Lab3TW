<?php

class Vista {
    private $array;
    public function __construct()
    {
        
    }

    public function vista($name, $array = []){
        $this->setArray($array);
        require ('vista/'.$name.'.php');   
    }

    public function setArray($array){
        $this->array = $array;
    }
}
?>