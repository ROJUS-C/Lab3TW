<?php
require_once 'model/conexion.php';
class ModeloNoticias extends MSQ {

    public function __construct()
    {
        parent::__construct();
    }

    public function mostratNoticia(){

        $sql = 'SELECT noticia_id,titulo, imagen, resumen, categoria, fecha FROM noticia';
        try {
            $res =  $this->query($sql);
            return $res;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function eliminarNoticia($id){
        $sql = 'DELETE noticia WHERE noticia_id = '.$id.'';
        try {
            $res =  $this->query($sql);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function verNoticia($id){
        $sql = 'SELECT titulo, imagen, resumen, categoria, fecha FROM noticia WHERE noticia_id = ' . $id . '';
        try {
            $res =  $this->query($sql);
            return $res;
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
?> 