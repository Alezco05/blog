<header>
	<div class="contenedor">
		<div class="logo izquierda">
			<p><a href="<?php echo RUTA; ?>">Blog</a></p>
		</div>
		<div class="derecha">
			<form name="busqueda" action="<?php echo RUTA;?>/buscar.php" class="buscar" method="get">
			<input type="text" name="busqueda" placeholder="buscar">
			<button type="submit" class="icono fa fa-search"></button>
			</form>
			<nav class="menu">
				<ul>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>					
				</ul>
			</nav>
		</div>
	</div>
</header>