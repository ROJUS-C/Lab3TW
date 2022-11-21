<!-- Se mostrara una tabla de las noticias que existen con sus respectivos botones de: ver, editar, eliminar -->
<?php

include "../controlador/verNoticia.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link href="../libs/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Tablero de Noticia -->
            <div class="card p-0">
                <div class="card-header">
                  Tablero de Noticias
                </div>
                <div class="card-body d-flex flex-wrap">
                    <?php 
                    // Empieza el ciclo: mostramos cada fila(noticia) obtenida en la consulta. 
                    foreach ($noticias as $noticia){
                    
                    ?>
                        <!-- Noticia -->
                        <div class="card col-4">
                            <img src="../img/<?php echo $noticia['imagen']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $noticia['titulo']; ?></h5>
                                <h6 class="card-text text-secondary"><?php echo $noticia['categoria']; ?></h6>
                                <p class="card-text"><?php echo $noticia['resumen']; ?></p>
                                <div class="card-btn">
                                    <a href="#" class="btn btn-primary">Ver</a>
                                    <a href="#" class="btn btn-warning">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted"><?php echo $noticia['fecha']; ?></small>
                            </div>
                        </div>
                    
                    <?php
                    //Cierre del ciclo
                    };

                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>