<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styls.css">
	<title>Quinto Punto</title>
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
	<h1>Quinto punto de validacion</h1>
	<p>Realizar un formulario con un campo de tipo email e imprimir del lado del servidor, con PHP la siguiente informacion:
	<div>a. Si tiene un @ o varios @ en el dato ingresado. </div>
	<div>b. Cuál es el dominio del correo.</div>
	<div>c. Cuál es el nombre del correo (antes del @). </div>
	<div>d. Imprimir cuál es la extensión del dominio.</div></p>

	<form action="validacion5.php" method="POST">
		<input type="email" name="email">
		<input type="submit" name="enviar" value="enviar">
	</form>
	<?php 
	include 'funciones.php';
	$p="";
	if (isset($_POST['email'])) {
		$email=$_POST['email'];
		if (contarArroa($email)==0) {
			echo "Los datos ingresados no tiene @";
		}elseif (contarArroa($email)==1) {
			echo "Los datos ingresados contiene 1 @";
		}else
		echo "los datos ingresados contiene".contarArroa($email)." @";
		
		
		$p2="";
		for ($i=0; $i <strlen($email) ; $i++) { 
			$p=substr($email,$i,1);
			$p2.=substr($email, $i,1);
			if ($p=="@") {
				$p2=substr($p2, 0,-1);
				break;
			}
		}
		echo "<div>el nombre del correo es ".$p2."</div>";
		if (substr($email,-3,3)=="com") {
			echo "<div>El dominio es: ".substr($email,-4,4)." </div>";
		}elseif (substr($email,-2,2)=="co"&&substr($email,-6,3)=="com") {
			echo "<div>El dominio es: ".substr($email,-7,4)." </div>";
			echo "<div>La extension es: ".substr($email,-3,3)." </div>";
		}elseif (substr($email,-2,2)=="co"&&substr($email,-6,3)!="com") {
			echo "<div>El dominio es: ".substr($email,-8,5)." </div>";
			echo "<div>La extension es: ".substr($email,-3,3)." </div>";
		}elseif (substr($email,-3,3)!="com") {
			echo "<div>El dominio es: ".substr($email,-5,5)." </div>";
		}
		


	}

	 ?>
	
</body>
</html>