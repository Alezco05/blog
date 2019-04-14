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
    <?php require "header.php";?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">
                   Editar Articulo
                </h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="post">
                	<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                    <input name="titulo" value="<?php echo $post['titulo']; ?>" type="text"/>
                    <input name="extracto" value="<?php echo $post['extracto']; ?>" type="text"/>
                    <textarea name="texto">
                    	<?php echo $post['texto']; ?>
                    </textarea>

                    <!-- <input type="hidden" name="thumb-guarda" value="<?php echo $post['thumb']; ?>"> -->
                    <input type="submit" value="Modificar Articulo"/>
                </form>
            </article>
        </div>
    </div>
</body>
<?php require "footer.php";?>
