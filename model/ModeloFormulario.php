<?php
require_once 'model/conexion.php';
class ModeloFormulario extends MSQ
{

    public function __construct()
    {
        parent::__construct();
    }

    public function agregarNoticia($titulo, $img, $resumen, $categoria, $noticia, $fecha){
        $sql = "INSERT noticia VALUES(
            NUll,
            '".$titulo."',
            '".$img."',
            '".$resumen."',
            '".$categoria."',
            '".$noticia."',
            '".$fecha."'
        )";
        $this->query($sql);
    }

}
?> 