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
		<img class="portada-gastronomia" src="img/fiestas-peru.jpg">

		<div class="gastronomia-peru">
			<h3>Fiesta Perú</h3>
			<div class="izquierda-gastronomia">
			<p>
				El Perú debido a la multiculturalidad que poseé presenta a lo largo de su territorio distintas fiestas, diferentes entre si, las cuales muestran la fervosidad del pueblo peruano.<br><br>
				Muchas veces estas fiestas estan ligadas a un origen religioso y por la combinacion autoctona de la cultura aborigen con la española dada por la convivencia de estas.<br><br>
				 
				Algunas fiestas son:<br><br>
				 
				- La circuncision del señor (1 de enero en Ayacucho).<br>
				- El aniversario de Lima (18 de enero en Lima).<br>
				- Festival nacional de marinera (todo enero, Trujillo,La libertad).<br>
				- Fiesta de la Virgen de la Candelaria (todo febrero en Puno).</p>
			</div>

			<div class="derecha-gastronomia">
			<p>	- Carnaval de Cajamarca (inicia dias antes del miercoles de ceniza y finaliza el domingo posterior en Cajamarca).<br>
				- Aniversario de la Fundación de Trujillo (5 de marzo, Trujillo).<br>
				- Señor de los temblores (2° quincena de marzo y 2° quincena de abril en Cuzco).</p>
				<!-- <img src="img/comida.png"> -->
			</div>

			<div class="clear"></div>
		</div>

		<?php
		include 'redes-sociales-flotantes.php';
		?>

		<?php
		include 'contacto.php';
		?>

	</div>

	<?php
	include 'pie-pagina.php';
	?>		
</body>

</html>