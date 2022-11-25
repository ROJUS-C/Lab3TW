<!-- Formulario para insertar una noticia -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo constant('URL') ?>libs/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo constant('URL') ?>public/css.css" rel="stylesheet">

</head>

<body>
    <?php include_once 'vista/componentes/header.php' ?>
    <main>
        <?php include_once 'vista/componentes/modal.php' ?>
        <div class="container">
            <form id="form" action="<?php echo constant('URL') ?>formulario/agregarNoticia" method="POST">
                <div class="container mt-3">
                    <h2>Agregar Noticia</h2>
                    <?php if (isset($_GET['agregar'])) { ?><div class="alert alert-success">
                            Noticia agregada
                        </div>
                    <?php } ?>
                    <form action="<?php echo constant('URL') ?>formulario/agregarNoticia" method="POST">
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" class="form-control" placeholder="Titulo" name="titulo">
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" class="form-control" name="imagen">
                        </div>
                        <div class="form-group">
                            <label>Resumen</label>
                            <textarea class="form-control" placeholder="Escribe un resumen..." name="resumen"></textarea>
                        </div>
                        <div class="from-group">
                            <label>Categoria</label>
                            <select class="form-control" name="categoria">
                                <option value="" selected>Selecciona una opcion...</option>
                                <option value="Nacional">Nacional</option>
                                <option value="Mundial">Mundial</option>
                                <option value="Deporte">Deporte</option>
                                <option value="Politica">Politica</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Noticia</label>
                            <textarea class="form-control" placeholder="Escribe la noticia..." name="noticia"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                        <div class="d-flex py-3 gap-3" id="action">
                            <button type="submit" name="add" class="btn btn-primary">Enviar</button>
                            <a class="btn btn-info" href="<?php echo constant('URL') ?>noticia" style="color: white">Ver noticias</a>
                        </div>
                    </form>
                </div>
    </main>
    <script src="<?php echo constant('URL') ?>public/js/validaciones.js"></script>

</body>

</html>