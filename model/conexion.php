<?php

$servername = "localhost";
$username = "root";
$password = "";
$basedatos = "";

//Creamos la conexion
$conexion = new mysqli($servername, $username, $password, $basedato);

//verificamos la conexion
if ($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
}else{
    echo "Conexion establecida...";
}

?>