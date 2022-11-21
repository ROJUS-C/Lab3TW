<?php 
require_once 'controlador/Vista.php';
class ControllerFormulario extends Vista{

    public function __construct()
    {
        parent::__construct();
    }

    public function render(){
        $this->vista('formulario', []);
    }

    public function agregar(){
        $titulo = $_POST['titulo'];
        $img = $_POST['img'];
        $categoria = $_POST['categoria'];
        $resumen = $_POST['resumen'];
        $noticia = $_POST['noticia'];
        $fecha = $_POST['fecha'];
        require_once ('model/ModeloFormulario.php');
    }
}
