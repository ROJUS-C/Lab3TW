<?php

class Vista {
    private $array;
    public function __construct()
    {
        
    }
    /*Funcion para rendirisar la vista*/
    public function vista($name, $array = []){
        $this->setArray($array);
        require ('vista/'.$name.'.php');   
    }


    /*Funcion para guardar los datos de una consulta en forma de array*/
    public function setArray($array){
        $array1 = array();
        foreach ($array as $key => $value) {
            array_push($array1, $value);
        }
        $this->array = $array1;
    }
}
?>