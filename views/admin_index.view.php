<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <title>
                Blog
            </title>
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport"/>
            <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>
            <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
            <link href="<?php echo RUTA; ?>/css/style.css" rel="stylesheet"/>
        </meta>
    </head>
</html>
<body>
    <?php require "../views/header.php";?>
    <div class="contenedor">
        <h2>
            Panel de control
        </h2>
        <a class="btn" href="nuevo.php">
            Nuevo Post
        </a>
        <a class="btn" href="cerrar.php">
            Cerrar Sesion
        </a>
        <?php foreach ($posts as $post): ?>
        <div class="post">
            <article>
                <h2 class="titulo">
                    <?php echo $post['id']. '-' . $post['titulo']; ?>
                </h2>
                <a href="editar.php?id=<?php echo $post['id']; ?>">
                    Editar
                </a>
                <a href="../single.php?id=<?php echo $post['id']; ?>">
                    Ver
                </a>
                <a href="borrar.php?id=<?php echo $post['id']; ?>">
                    Borrar
                </a>
            </article>
        </div>
        <?php endforeach;?>
        <?php require '../paginacion.php';?>
    </div>
    <?php require "../views/footer.php";?>
</body>
