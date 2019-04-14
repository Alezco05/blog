<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href='<?php echo RUTA; ?>/css/style.css'>
</head>
<body>
<?php require "header.php";?>
<div class="contenedor">

	<?php foreach ($posts as $post): ?>
	<div class="post">
		<article>
			<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
			<p class="fecha"> <?php echo fecha($post['fecha']); ?></p>
			<div class="thumb"><a href="single.php?id=<?php echo $post['id']; ?>">
				<img src="<?php echo RUTA; ?>/imag/ <?php echo $post['thumb']; ?>" alt="">
			</a></div>
			<p class="extracto"> <?php echo $post['extracto']; ?></p>
			<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
		</article>
	</div>
    <?php endforeach;?>


	<?php require 'paginacion.php';?>
</div>
<?php require "footer.php";?>
</body>
</html>