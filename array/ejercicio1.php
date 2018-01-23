	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>primer ejercicio</title>
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
	<h1>PRIMER PUNTO</h1>
	<p> Llenar un arreglo de 5 elementos, imprimir la posición y el valor del elemento mayor
	almacenado en el arreglo. Tenga en cuenta que todos los elementos del arreglo son
	diferentes.</p>
	<form  method="POST" action="ejercicio1.php">
	<h3>Porfavor ingrese los numeros</h3>

	<ul>
	<label >1er numero:</label><input type="number"  name="num0">
	<label >2do numero:</label><input type="number"  name="num1">
	<label >3er numero:</label><input type="number"  name="num2">
	<label >4to numero:</label><input type="number"  name="num3">
	<label >5to numero:</label><input type="number"  name="num4">
	</ul>
		<input type="submit" class="uno">
		<?php 
		error_reporting(0);
		$maxi= 0;
		$lugar;
		$var=array();
		for ($i=0; $i < 5; $i++) { 
			if(isset($_POST['num'.$i]))
				$var[$i]=$_POST['num'.$i];

			if ($var[$i]>$maxi) {
				$maxi=$var[$i];
				$lugar=$i;
			}
		}

		if ($maxi==0) {
			echo "INGRESE VALORES";
		}else{

			echo "El numero mayor es ".$maxi." en la posicion ".($lugar+1);
		}
		 ?>
		
		
	 </form>
	</body>
	</html>