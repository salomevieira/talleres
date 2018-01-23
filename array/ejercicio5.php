<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>quinto ejercicio</title>
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
	<h1>QUINTO PUNTO</h1>
	<p> Diseñar el algoritmo correspondiente a un programa, que:
 
<div>- Crea una matriz de 10x10 (filas x columnas) de nombre 'tabla'.</div>
 
<div>- Carga la matriz de manera que las filas pares se rellenan con 1 y las filas impares
con 0.</div>
 
<div>- Una vez inicializada la matriz muestra su contenido en pantalla.</div>
</p>
	
	<?php 
	$tabla =array(
			array(0,0,0,0,0,0,0,0,0,0),
			array(1,1,1,1,1,1,1,1,1,1),
			array(0,0,0,0,0,0,0,0,0,0),
			array(1,1,1,1,1,1,1,1,1,1),
			array(0,0,0,0,0,0,0,0,0,0),
			array(1,1,1,1,1,1,1,1,1,1),
			array(0,0,0,0,0,0,0,0,0,0),
			array(1,1,1,1,1,1,1,1,1,1),
			array(0,0,0,0,0,0,0,0,0,0),
			array(1,1,1,1,1,1,1,1,1,1)
		);


	for ($i=0; $i <10 ; $i++) { 
		echo "<div>";
		for ($j=0; $j <10 ; $j++) { 
			echo $tabla[$i][$j];
		}
		echo "</div>";
	}
error_reporting(0);
	 ?>
	
	</body>
	</html>