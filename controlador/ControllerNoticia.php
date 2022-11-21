<?php
require_once 'controlador/Vista.php';
class ControllerNoticia extends Vista{

    public function __construct()
    {
        parent::__construct();
    }

    public function render(){
        $this->vista('noticias', []);
    }
}

?>