<?php
class MSQ {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $basedatos = "laboratorio3tw";
    private $conexion;
    public function __construct()
    {
        //Creamos la conexion
        try {
            $this->conexion = new mysqli($this->servername, $this->username, $this->password, $this->basedatos);      
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    /*funcion para las consultas y operaciones DLM*/
    public function query($sql){
        return $this->conexion->query($sql);
    }
}
?>