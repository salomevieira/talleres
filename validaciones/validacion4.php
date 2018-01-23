<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styls.css">
	<title>Cuarto Punto</title>
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="valida.php">Inicio</a></li>

			<li><a href="#">Ejercicios</a>
			<div>
				<ul>
					<li><a href="validacion1.php">problema #1</a></li>
					<li><a href="validacion2.php">problema #2</a></li>
					<li><a href="validacion3.php">problema #3</a></li>
					<li><a href="validacion4.php">problema #4</a></li>
					<li><a href="validacion5.php">problema #5</a></li>
				</ul>
			</div>
			</li>


			<li><a href="#">Concluciones</a>
			<div>
				<ul>
					<li><a href="concluciones.php">Conocimiento</a></li>
				</ul>
			</div>

			</li>
		</ul>
	</nav>
</header>
	<h1>Cuarto punto de validacion</h1>
	<p>Realizar un formulario, con un campo de tipo date e imprimir del lado del servidor, con PHP, la siguiente información:
	<div>a. Indicar cuál fue el año ingresado.</div>
	<div>b. Indicar cuál fue el mes ingresado.</div>
	<div>c. Indicar cuál fue el día ingresado.</div>
	<div>d. Convertir en fecha con la función date_date_set().</div></p>
	
	<form action="validacion4.php" method="POST">
		<input type="date" name="fecha">
		<input type="submit" name="enviar" value="enviar">	
	

	</form>	

	<?php 
	if (isset($_POST['fecha'])) {
		$fecha=$_POST['fecha'];
		
		echo "<div>".$fecha."</div>";
		echo "El año ingresado es ".substr($fecha,0,4)." el mes es ".substr($fecha,-5,2)." y el dia es ".substr($fecha,-2,2);
		
	}

	 ?>
</body>
</html>