<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Talleres</title>
</head>
<body>
	<h1>Talleres</h1>
	<header>
	<nav>
		<ul>
			<div >
				
					<li><a href="array/array.html">Taller Arrays</a></li>
					<li><a href="session/sesion.html">Taller Session</a></li>	
					<li><a href="validaciones/valida.php">Taller Validaciones</a></li>
					<li><a href="PPYP/index.html">Pelfiles</a></li>
				
			</div>
		</ul>
	</nav>
</header>
<div>
	<div class="info">
		<div>
			<h2>Tecnologia en ADSI</h2>
			<h2>Maria Salome Castro Vieira</h2>
			<h3>Ficha: 1354963</h3>
		</div>
		<div>
			<h2> Fecha Creación</h2>Jueves 02 de Noviembre del 2017
			<h2>Fecha Actual</h2>
			<?php 
				$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
				$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
				echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
				//$fecha = date("l");
				//setlocale(LC_ALL,"es_ES");
				//echo strftime("%A %d de %B del %Y");
				//echo date('l jS \of F Y h:m:s A')

			?>
 		</div>
			<img src="validaciones/img/foto_s.jpg" alt="fotoSalome">
		
	</div>
	<div class="p">
		<P>
		<H2>Perfil</H2>
			Maria Salome Castro Vieira 
			Estudiante de la tecnologia analicis y desarrollo  de sistemas informaticos de la 
			univercidad UNICUCES con convenio SENA  cursando el 3 trimestre de ADSI 
			este es un trabajo donde se evaluara el desempeño de dicho trimestre. 
		</P>
	</div>
</body>
</html>