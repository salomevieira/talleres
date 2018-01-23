<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>sexto ejercicio</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/png" href="armario.png">
	</head>
	<body>
	<h1>SEXTO PUNTO</h1>
	<p> Crear un formulario en el cual se reciban 2 numeros y un símbolo aritmético, y mostrar el resultado de la operación seleccionada con los numeros introducidos.</p>
	<form  method="POST" action="ejercicio6.php">
	<div><label>primer numero:</label><input type="number" name="num1"></div>
	<div><label>segundo numero:</label><input type="number" name="num2"></div>
	<div><label>simbolo:</label><input type="text" name="simbolo"></div>
	<?php 
	$sim="";
	$num1=0;
	$num2=0;
	$operación=0;
	if (isset($_POST['num1'])) {
		$num1=$_POST['num1'];
	}
	if (isset($_POST['num2'])) {
		$num2=$_POST['num2'];
	}
	if (isset($_POST['simbolo'])) {
		$sim=$_POST['simbolo'];
	}

	if ($sim=="+") {
		$operación=$num1+$num2;
	}
	if ($sim=="-") {
		$operación=$num1-$num2;
	}
	if ($sim=="*") {
		$operación=$num1*$num2;
	}
	if ($sim=="/") {
		$operación=$num1/$num2;
	}
	
	echo "El resultado es: ".$operación;
	 ?>
		
		<div><input type="submit" class="uno"></div>
	 </form>
	</body>
	</html>