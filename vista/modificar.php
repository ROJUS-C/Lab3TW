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
                    Modificar
                </div>
                <div class="container">
                    <!-- Formulario para modificar-->
                    <?php foreach ($this->array as $key => $value) {

                    ?>
                        <form action="<?php echo constant('URL') ?>noticia/modificar?id=<?php echo $value['noticia_id'] ?>" method="POST">
                            <div class="form-group">
                                <label>Titulo</label>
                                <input type="text" class="form-control" value="<?php echo $value['titulo']; ?>" name="titulo">
                            </div>
                            <div class="form-group">
                                <label>Imagen</label>
                                <input type="file" class="form-control" name="imagen">
                            </div>
                            <div class="form-group">
                                <label>Resumen</label>
                                <textarea class="form-control" name="resumen"><?php echo $value['resumen']; ?></textarea>
                            </div>
                            <div class="from-group">
                                <label>Categoria</label>
                                <select class="form-control" name="categoria">
                                    <option selected><?php echo $value['categoria']; ?></option>
                                    <option value="1">Categoria 1</option>
                                    <option value="2">Categoria 2</option>
                                    <option value="3">Categoria 3</option>
                                    <option value="4">Categoria 4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Noticia</label>
                                <textarea class="form-control" name="noticia"><?php echo $value['noticia']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Fecha</label>
                                <input type="date" value="<?php echo $value['fecha']; ?>" class="form-control" name="fecha">
                            </div>
                            <div class="d-flex py-3 gap-3">
                                <button name="btn" class="btn btn-primary">Enviar</button>
                                <a class="btn btn-info" href="<?php echo constant('URL') ?>noticia" style="color: white">Volver</a>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php if (isset($_POST['btn'])) {
    echo 'holaaaa';
}
?>