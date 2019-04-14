<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href='<?php echo RUTA; ?>/css/style.css'>
</head>
<body>
	<?php require "header.php";?>
<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo"><?php echo $post['titulo']; ?></h2>
			<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
			<div class="thumb">
				<img src="<?php echo RUTA; ?>/imag/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>">
			</div>
			<p class="extracto"><?php echo nl2br($post['texto']); ?></p>
		</article>
	</div>
</div>
<?php require "footer.php";?>
</body>
</html>