<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>KANCHAY PERU</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="" />

	<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

	<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->

	<!--================== 	ENLACE ICONO (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--================== 	ENLACE ICONO (TERMINA)  =====================-->

</head>

<body>
	<header>
		<?php
		include 'menu.php';
		?>
	</header>


	<div class="fondo-azulclaro">
		<div class="titulo-servicios2"><img src="img/servicios-kanchay-peru.png"><h2>SERVICIOS</h2></div>
		
		<div class="opciones-servicios">
			<div class="hoteles">
				<h3><a href="">Hoteles</a></h3>
				<a href=""><img src="img/hoteles-kanchay-peru.png"></a>
			</div>
			
			<div class="transporte">
				<h3><a href="">Transporte</a></h3>
				<a href=""><img src="img/transporte-kanchay-peru.png"></a>
			</div>
		</div>
		

		<div id="transporte-todos">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i> TRANSPORTES</h3>
			
			<div class="opcion-transporte">
				<a href="transporte-terrestre.php"><img src="img/transporte1.png"></a>
				<h4><a href="transporte-terrestre.php">Terrestre</a></h4>
			</div>

			<div class="opcion-transporte">
				<a href="transporte-aereo.php"><img src="img/transporte2.png"></a>
				<h4><a href="transporte-aereo.php">Aereo</a></h4>
			</div>

			<div class="opcion-transporte">
				<a href="transporte-lacustre.php"><img src="img/transporte3.png"></a>
				<h4><a href="transporte-lacustre.php">Lacustre</a></h4>
			</div>

		</div>

		<?php
		include 'contacto.php';
		?>

	</div>

	<?php
	include 'pie-pagina.php';
	?>		
</body>

</html>