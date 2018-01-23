<!DOCTYPE HTML>
<?php session_start(); ?>
<!--
	Autonomy by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Bienvenidos</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container">
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Contacto</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="twocolumn1.html">Perfil</a></li>
						<li class="active"><a href="onecolumn.html">Contacto</a></li>
					</ul>
				</nav>

			</div>
		</div>
		<!-- Header -->

		<div id="banner">&nbsp;</div>

		<div id="featured">
			<div class="container">
				<div class="row">
					<div class="12u">
						<section>
							<header>
								<h2 class="titulo">Gracias por tu Mensaje</h2>
							</header>
							<label></label>
							<div class="respuestas">
								<div>
							<?php 
							//nombre

							if (!empty($_POST['nombre'])) {
								$_SESSION['nombre']=$_POST['nombre'];
								$largo=strlen($_SESSION['nombre']);
								for ($i=0; $i <$largo ; $i++) { 
									$letras=substr($_SESSION['nombre'],$i,1);
									if (is_numeric($letras)) {
										$_SESSION['error1']="ingrese su nombre";
										header("location:onecolumn.php");
										break;
									}
								}
								echo "<label>Nombre: </label>"."<p>".$_SESSION['nombre']."</p><br>";
							}
							else{
								$_SESSION['error1']="ingrese su nombre";
								header("location:onecolumn.php");
							}
							 ?>
							</div>
							<div>
							 <?php
							//apellidos
							if (!empty($_POST['apellido'])) {
								$_SESSION['apellido']=$_POST['apellido'];
								$largo=strlen($_SESSION['apellido']);
								for ($i=0; $i <$largo ; $i++) { 
									$letras=substr($_SESSION['apellido'],$i,1);
									if (is_numeric($letras)) {
										$_SESSION['error2']="ingrese su Apellido";
										header("location:onecolumn.php");
										break;
									}
								}
								echo "<label>Apellidos: </label>"."<p>".$_SESSION['apellido']."</p><br>";
							}
							else{
								$_SESSION['error2']="ingrese sus Apellidos";
								header("location:onecolumn.php");
							}
							 ?>	
							</div>
							<div>
							<?php
							//telefono
							if (strlen($_POST['telefono'])==7 || strlen($_POST['telefono'])==10) {
								$_SESSION['telefono']=$_POST['telefono'];
								echo "<label>Telefono: </label>"."<p>".$_SESSION['telefono']."</p><br>";
							}
							else{
								$_SESSION['error3']="ingrese un nuemro telefonico";
								header("location:onecolumn.php");
							}
							 ?>
							 </div>
							 <div>
							<?php
							//correo
							function is_valid_email($str){
  								return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
  							}
							if (!empty($_POST['correo']) && is_valid_email($_POST['correo'])) {
								$_SESSION['correo']=$_POST['correo'];
								echo "<label>Correo Electronico: </label>"."<p>".$_SESSION['correo']."</p><br>";
							}
							else{
								$_SESSION['error4']="ingrese su Correo Electronico";
								header("location:onecolumn.php");
							}
							 ?>
							</div>
							<div>
							<?php
							//mensaje
							if (!empty($_POST['asunto'])) {
								$_SESSION['asunto']=$_POST['asunto'];
								echo "<label>Mensaje: </label>"."<p>".$_SESSION['asunto']."</p><br>";
							}
							else{
								$_SESSION['error']="ingrese su Mensaje";
								header("location:onecolumn.php");
							}
							 ?>
							 </div>
							</div>
								
						</section>
					</div>		
				</div>
			</div>
		</div>
		<div id="marketing">
			<div class="container">
				<section>
					<div class="frase">
						<header>
							<h2>"NUESTRO FUTURO DEPENDE DE COMO ENTENDAMOS EL PASADO"</h2>
						</header>
						<div>
								<a href="https://www.facebook.com/"><img src="images/facebook_icon-icons.com_61257.png" border="0"></a>
								<a href="https://www.instagram.com/?hl=es-la"><img src="images/instagram_icon-icons.com_61256.png" border="0"></a>
								<a href="https://web.whatsapp.com/"><img src="images/phone_icon-icons.com_61250.png" border="0"></a>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> ~ Editada por: Salome Castro Vieira
			</div>
		</div>

	</body>
</html>