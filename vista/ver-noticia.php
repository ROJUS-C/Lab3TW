<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver-Noticias</title>
    <link href="<?php echo constant('URL') ?>libs/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
                  <?php include_once 'vista/componentes/header.php' ?>
                        <div class="container">
        <div class="row">
            <div class="card p-0">
                <div class="card-body d-flex justify-content-center">
                    <!-- Noticia -->
                    
                        <div class="card">
                            <img src="<?php echo constant('URL') ?>img\sismo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">TITULO</h5>
                                <h6 class="card-text text-secondary">Categoria</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><?php  ?></small>
                            </div>

                        </div>
                </div>
            </div>
        </div>
        <a class="btn btn-info" style="color: white">Volver</a>
    </div>
</body>
</html>