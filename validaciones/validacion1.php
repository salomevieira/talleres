<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styls.css">
	<title>Primer Punto</title>
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
	<h1>Primer punto de Validacion</h1>
	<p>Realizar un formulario, que reciba un dato e imprimir del lado del servidor, con PHP, la siguiente información:
	<div>a. Si es número. </div>
	<div>b. Si es texto.</div>
	<div>c. Si tiene espacios. </div>
	<div>d. Cuantos caracteres tiene el campo ingresado.</div>
	</p>
	<form action="validacion1.php">
		<input type="text" name="tex">
		<input type="submit" value="enviar" name="submit">
	</form>
	<?php 	
include 'funciones.php'; 
	$a="";
	$c=0;

	if (isset($_GET['tex'])) {
		$a=$_GET['tex'];
		$palabra=explode(" ", $a);
		$c=count($palabra)-1;
		if (is_numeric($a)) {
			echo "Los datos ingresados son numeros";
		}elseif (!empty($a)&& letras($a)==2) {
			echo "Los datos ingresado son solo texto";
		}elseif (!empty($a)&& is_string($a)) {
			echo "Los datos ingresados tienen numeros y letras";
		}	

	}

		
	if (isset($_GET['submit'])) {
			echo "<br>la palabra ingresada tiene ".(strlen($a)-$c)." caracteres con ".$c." espacios";
echo "<pre>";
print_r($palabra);
echo "</pre>";
		}	
		

	
	
	
	 ?>
	
	
</body>
</html>