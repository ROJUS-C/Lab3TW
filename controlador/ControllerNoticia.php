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

    public function vistaModificar (){
        require_once 'model/ModeloNoticias.php';
        $noticia = new ModeloNoticias();
        $id = $_GET['id'];
        $res =  $noticia->verNoticia($id);
        $this->vista('modificar', $res);
    }
    /*Funcion para modificar noticia*/
    public function modificar(){
        require_once 'model/ModeloNoticias.php';
        $query = new ModeloNoticias();
        $id = $_GET['id'];
        $error = false; 
        if(isset($_POST['titulo'])){
            if(!$query->update($id, 'titulo', $_POST['titulo'] )){
            $error = true;
            }
        }
        if(isset($_POST['imagen'])){
            $img = $_POST['imagen'];
            if(!empty($img)){
                if (!$query->update($id, 'imagen', $_POST['imagen'])) {
                    $error = true;
                }   
            }
        }
        if (isset($_POST['categoria'])) {
            if (!$query->update($id, 'categoria', $_POST['categoria'])) {
                $error = true;
            }
        }
        if (isset($_POST['resumen'])) {
            if (!$query->update($id, 'resumen', $_POST['resumen'])) {
                $error = true;
            }
        }
        if (isset($_POST['noticia'])) {
            if (!$query->update($id, 'noticia', $_POST['noticia'])) {
                $error = true;
            }
        }
        if (isset($_POST['fecha'])) {
            if (!$query->update($id, 'fecha', $_POST['fecha'])) {
                $error = true;
            }
        }
        if (!$error) {
            header('Location:' . constant('URL') . 'noticia?error=1');
        }
        header('Location:' . constant('URL') . 'noticia');
    }

    public function ver()
    {
        $this->vista('ver-noticia', []);
    }
    public function eliminar()
    {
        require_once 'model/ModeloNoticias.php';
        $noticia = new ModeloNoticias();
        $id = $_GET['id'];
        echo $id;
        if(!$noticia->eliminarNoticia($id)){
            header('Location:' . constant('URL') . 'noticia?errorE=1');
        }
        header('Location:' . constant('URL') . 'noticia?eliminado=1');

    }
}
?>