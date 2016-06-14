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

	<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "HOTELES" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-1a').on('click', function(){
				$('#grande-hotel-1a').show();
				$('#grande-hotel-2a').hide();
				$('#grande-hotel-3a').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-2a').on('click', function(){
				$('#grande-hotel-2a').show();
				$('#grande-hotel-1a').hide();
				$('#grande-hotel-3a').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-3a').on('click', function(){
				$('#grande-hotel-3a').show();
				$('#grande-hotel-1a').hide();
				$('#grande-hotel-2a').hide();
			});
		});
	</script>
	<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "HOTELES" (TERMINA)  =====================-->

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
				<h3><a href="servicios.php">Hoteles</a></h3>
				<a href="servicios.php"><img src="img/hoteles-kanchay-peru.png"></a>
			</div>
			
			<div class="transporte">
				<h3><a href="servicios-transporte.php">Transporte</a></h3>
				<a href="servicios-transporte.php"><img src="img/transporte-kanchay-peru.png"></a>
			</div>
		</div>
		

		<div class="hoteles-descripcion">
			<h3>HABITAT HOTEL</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/habitat/habitat-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/habitat/habitat-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/habitat/habitat-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/habitat/habitat-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/habitat/habitat-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/habitat/habitat-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Hábitat Hotel es un moderno establecimiento de diseño contemporáneo situado en el centro de Lima, a 14 km del aeropuerto Jorge Chávez. Ofrece elegantes suites con servicios gratuitos de conexión inalámbrica a internet y aparcamiento.<br><br>
				Las habitaciones del Hábitat Hotel, decoradas con hermosas telas de color marrón y alegres obras de arte, están equipadas con camas dobles, aire acondicionado y TV por cable. Algunas tienen un jacuzzi privado.<br><br>
				En el restaurante del hotel se sirve un desayuno bufé americano compuesto por pastas recién hechas, zumos y panecillos. El Hábitat se encuentra próximo a Miraflores, cerca de varias opciones gastronómicas muy populares.<br><br>
				El Hábitat Hotel dispone de una práctica recepción abierta las 24 horas, que organiza un servicio de traslado al aeropuerto bajo petición. 
				</p>			

				<a href="#contacto">Reservar</a>	

				<div class="clear"></div>		
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