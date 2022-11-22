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
</head>

<body>
    <?php include_once 'vista/componentes/header.php' ?>
    <main>
        <div class="container">
            <form action="<?php echo constant('URL')?>formulario/agregar" method="POST">
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="text" class="form-control" placeholder="Titulo" name="titulo">
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input type="file" class="form-control" name="img">
                </div>
                <div class="form-group">
                    <label>Resumen</label>
                    <textarea class="form-control" placeholder="Escribe un resumen..." name="resumen"></textarea>
                </div>
                <div class="from-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option selected>Selecciona una opcion...</option>
                        <option value="1">Categoria 1</option>
                        <option value="2">Categoria 2</option>
                        <option value="3">Categoria 3</option>
                        <option value="4">Categoria 4</option>
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <a class="btn btn-info" style="color: white">Ver noticias</a>
        </div>
    </main>
</body>

</html>