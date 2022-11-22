<?php
require_once 'controlador/Vista.php';
class ControllerNoticia extends Vista{

    public function __construct()
    {
        parent::__construct();
    }

    public function render(){
        require_once 'model/ModeloNoticias.php';
        $noticia = new ModeloNoticias();
        $res =  $noticia->mostratNoticia();
        $this->vista('noticias', $res);
    }

    public function modificar (){
        $this->vista('modificar', []);
    }
}

?>