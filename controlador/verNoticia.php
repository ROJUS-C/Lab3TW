<?php 

//Conexion a base de datos
include "../model/conexion.php";

//Consulta
$consulta = "SELECT noticia_id, titulo, imagen, resumen, categoria, fecha FROM noticia";

//Realizando consulta a la base de datos
$noticias = $conexion->query($consulta);

?>