<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>segundo ejercicio</title>
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
<h1>SEGUNDO PUNTO</h1>
<p> Almacenar 10 números en un arreglo, almacenarlos en otro arreglo en orden inverso al arreglo original e imprimir el arreglo resultante.</p>
<form method="POST" action="ejercicio2.php">
<h3>Porfavor ingrese los numeros</h3>

	
	<div><label >1er numero:</label><input type="number"  name="num0"></div>
	<div><label >2do numero:</label><input type="number"  name="num1"></div>
	<div><label >3er numero:</label><input type="number"  name="num2"></div>
	<div><label >4to numero:</label><input type="number"  name="num3"></div>
	<div><label >5to numero:</label><input type="number"  name="num4"></div>
	<div><label >6to numero:</label><input type="number"  name="num5"></div>
	<div><label >7mo numero:</label><input type="number"  name="num6"></div>
	<div><label >8vo numero:</label><input type="number"  name="num7"></div>
	<div><label >9no numero:</label><input type="number"  name="num8"></div>
	<div><label >10mo numero:</label><input type="number"  name="num9"></div>
	
	<?php 
		error_reporting(0);
		$var=array();
		$var2=array();
		
			for ($i=0; $i < 10; $i++) { 
				if(isset($_POST['num'.$i]))
				$var[$i]=$_POST['num'.$i]; 
	
			}

			for ($i=0; $i < 10; $i++) { 
				$var2[$i]=$var[9-$i];
			}
			
			foreach ($var2 as $key => $value) {
				echo "posicion: ".$key." valor ".$value."<br>";
			}
			

		//print_r($var2);
 	?>
 <div><input type="submit" class="uno"></div>
 </form>
</body>
</html>