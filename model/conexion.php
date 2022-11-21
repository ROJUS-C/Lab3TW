<?php

$servername = "localhost";
$username = "root";
$password = "";
$basedatos = "laboratorio3tw";

//Creamos la conexion
$conexion = new mysqli($servername, $username, $password, $basedatos);

//verificamos la conexion
if ($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
}else{
    echo "Conexion establecida...";
}

?>