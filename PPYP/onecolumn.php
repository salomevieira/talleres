<!DOCTYPE HTML>
<?php 
	session_start();
	error_reporting(0);
 ?>	
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
						<li class="active"><a href="onecolumn.php">Contacto</a></li>
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
								<h2 class="titulo">Contactame</h2>
							</header>
							<form action="recibido.php" method="POST">
								
								<div class="formulario">
									<div><label>Nombre:</label><input type="text" name="nombre" placeholder="<?php echo $_SESSION['error1'];?>" required></div>
									<div><label>Apellidos:</label><input type="text" name="apellido" placeholder="<?php echo $_SESSION['error2'];?>" required></div>
									<div><label>Telefono:</label><input type="number" name="telefono" placeholder="<?php echo $_SESSION['error3'];?>"></div>
									<div><label>Correo Electronico:</label><input type="email" name="correo" placeholder="<?php echo $_SESSION['error4'];?>" required></div>
									<div><label>Mensaje:</label><input type="text" name="asunto" placeholder="<?php echo $_SESSION['error5'];?>" ></div>
								</div>
								<div class="enviar">
										<input type="submit" value="Enviar">
									</div>
							</form>
							
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