<!-- Se mostrara una tabla de las noticias que existen con sus respectivos botones de: ver, editar, eliminar -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link href="<?php echo constant('URL') ?>libs/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php include_once 'vista/componentes/header.php' ?>
    <div class="container">
        <div class="row">
            <!-- Tablero de Noticia -->
            <div class="card p-0">
                <div class="card-header">
                    Tablero de Noticias
                </div>
                <div class="card-body d-flex flex-wrap">
                    <!-- Noticia -->
                    <?php foreach ($this->array as $value) { ?>
                        <div class="card col-4 mx-3">
                            <img src="<?php echo constant('URL') ?>img/<?php echo $value['imagen'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $value['titulo'] ?></h5>
                                <h6 class="card-text text-secondary"><?php echo $value['categoria'] ?></h6>
                                <p class="card-text"><?php echo $value['resumen'] ?></p>
                                <div class="card-btn">
                                    <a href='<?php echo constant('URL') ?>noticia/ver?id=<?php echo $value['noticia_id'] ?>' class="btn btn-primary">Ver</a>
                                    <a href="<?php echo constant('URL') ?>noticia/modificar?id=<?php echo $value['noticia_id'] ?>" class="btn btn-warning">Editar</a>
                                    <a href="<?php echo constant('URL') ?>noticia/eliminar?id=<?php echo $value['noticia_id'] ?>" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><?php  ?></small>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>