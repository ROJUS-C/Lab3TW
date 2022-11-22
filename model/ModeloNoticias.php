<?php
require_once 'model/conexion.php';
class ModeloNoticias extends MSQ {

    public function __construct()
    {
        parent::__construct();
    }

    public function mostratNoticia(){
        $sql = 'SELECT titulo, imagen, resumen, categoria, fecha FROM noticia';

        $res =  $this->query($sql);
        return $res;
    }
}
?> 