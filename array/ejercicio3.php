	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>tercer ejercicio</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/png" href="armario.png">
	</head>
	<body>
		<header>
	<nav>
		<ul>
			<li><a href="../index.html">INICIO</a></li>
			<div>
				<ul>
					<li><a href="ejercicio1.php">PRIMER EJERCICIO</a></li>
					<li><a href="ejercicio2.php">SEGUNDO EJERCICIO</a></li>
					<li><a href="ejercicio3.php">TERCER EJERCICIO</a></li>
					<li><a href="ejercicio4.php">CUARTO EJERCICIO</a></li>
					<li><a href="ejercicio5.php">QUINTO EJERCICIO</a></li>
					<li><a href="ejercicio6.php">SEXTO EJERCICIO</a></li>
				</ul>
			</div>
		</ul>
	</nav>
</header>
	<h1>TERCERO PUNTO</h1>
	<p>Diseñe un algoritmo que lea un número cualquiera y lo busque en el arreglo X, el cual tiene almacenados 12 elementos. Escribir la posición donde se encuentra almacenado el número en el arreglo o el mensaje “NO” si no lo encuentra.</p>
	<form  method="POST" action="ejercicio3.php">
	<input type="number" name="num">

	<?php 
	error_reporting(0);
	$elementos=array();

	for ($i=0; $i <12 ; $i++) { 
		$elementos[$i]=rand(1,10);
	}

	if (isset($_POST['num'])) {
		$numero=$_POST['num'];
		for ($i=0; $i <12 ; $i++) { 
			if ($elementos[$i]==$numero) {
				echo "el numero se encuentra en la posicion ".$i;
				break;
			}else{
				echo " el numero no se encuentra";
				break;
			}
		}
	}else{
		echo "ingrese un valor";
	}
	



	
	
	 ?>

	<input type="submit" class="uno">
	 </form>

	</body>
	</html>