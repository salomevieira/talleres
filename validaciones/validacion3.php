<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styls.css">
	<title>Tercer Punto</title>
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
	<h1>Tercer punto de validacion</h1>
	<p> Realizar un formulario, con un campo de tipo número e imprimir del lado del servidor, con PHP, la siguiente información. 
	<div>a. Cuantos caracteres tiene. </div>
	<div>b. Que indique en que número inicia. </div>
	<div>c. Que imprima los tres primeros números </div>
	<div>d. Que imprima los últimos siete dígitos.</div>
	<div>e. Que indique si tiene más de 10 caracteres. </div>
	<div>f. Que diga si puede ser un número telefónico o no. </div></p>

	<form action="validacion3.php" method="POST">
		<input type="number" name="num">
		<input type="submit" name="submit" value="enviar">
	</form>

	<?php 
	if (isset($_POST['num'])) {
		$numero=$_POST['num'];
		$tamaño=strlen($numero);
		echo "<div>el numero ingresado tiene ".strlen($numero)." caracteres</div>";
		echo "<div>el numero ingresado empieza con ".substr($numero, 0,1)."</div>";
		echo "<div>Los tres primeros numeros son ".substr($numero, 0,3)."</div>";
		echo "<div>el numero ingresado empieza con ".substr($numero, 0,1)."</div>";
		if ($tamaño>7) {
			echo "<div>Los ultimos 7 digitos son".substr($numero, -7,7)."</div>";
		}if ($tamaño>10) {
			echo "<div>el numero ingresado tiene mas de 10 caracteres </div>";
		}if ($tamaño=7) {
			echo "<div>el numero ingresado puede ser un numero telefonico</div>";
		}
	}

	 ?>
</body>
</html>