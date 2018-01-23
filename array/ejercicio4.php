<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>cuarto ejercicio</title>
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
	<h1>CUARTO PUNTO</h1>
	<p>Diseñar el algoritmo correspondiente a un programa, que:
 
<div>- Crea un arreglo de 5 elementos de nombre 'vector'.</div>
 
<div>- Carga la tabla con valores aleatorios.</div>
 
<div>- Calcula la suma de los 'N' primeros elementos del arreglo ingresado a través de
un formulario.</div>

<div>- Muestra el resultado obtenido, así como el contenido del arreglo (completo) y el número ingresado por el usuario en pantalla.</div>
</p>
	<form  method="POST" action="ejercicio4.php">
	<?php 	
	error_reporting(0);
		$vector=array();
			for ($i=0; $i <5 ; $i++) { 
				$vector[$i]=rand(1,10);

			}
	 ?>
	<label>Ingrese rango:</label><input type="number" name="num">
	<input type="hidden" name="v0" value="<?php echo $vector[0] ;?>">
	<input type="hidden" name="v1" value="<?php echo $vector[1] ;?>">
	<input type="hidden" name="v2" value="<?php echo $vector[2] ;?>">
	<input type="hidden" name="v3" value="<?php echo $vector[3] ;?>">
	<input type="hidden" name="v4" value="<?php echo $vector[4] ;?>">
	<h2>VECTOR</h2>
		<?php
		
		
		$valores=array();
		$suma=0;
		
			if (isset($_POST['num'])) {
				$numero=$_POST['num'];
			}

			

			foreach ($vector as $key =>$value) {
				echo "<div>".$value."</div>";
			}
			for ($i=0; $i <$numero ; $i++) { 
				if (isset($_POST['v'.$i])) {
					$valores=$_POST['v'.$i];
					
				}
				$suma+=$valores;
			}
			
			echo "Suma es: ".$suma;
		 ?>
		<div><input type="submit"  name="enviar" class="uno"></div>
	 </form>
	</body>
	</html>