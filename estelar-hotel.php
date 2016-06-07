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
			<h3>ESTELAR HOTEL</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/estelar-hotel/estelar-hotel-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/estelar-hotel/estelar-hotel-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/estelar-hotel/estelar-hotel-1.5.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/estelar-hotel/estelar-hotel-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/estelar-hotel/estelar-hotel-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/estelar-hotel/estelar-hotel-2.5.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Hotel Estelar Miraflores le abrirá las puertas por la famosa Avenida Larco disfrutando de sus cafés o ir de shopping en sus diversas tiendas, disfrutar de una noche en la siempre animada Calle de las Pizzas o visitar Larco Mar, un centro comercial con vista al mar donde no sólo encontrará tiendas exclusivas, sino las mejores discotecas y bares de Lima. A sólo 20 minutos del centro histórico de Lima, el Hotel Estelar Miraflores esta estratégicamente ubicado para el viajero de turismo y negocios.<br><br>
				151 Habitaciones<br>
				ESTANDAR, SUPERIOR, JUNIOR SUITE, TWIN Y PREMIUM ESTELAR<br>
				Dotadas para su estadía de negocios o de turismo. Cuentan con televisión plasma, 2 teléfonos en la habitación, aire acondicionado, plancha y mesa para planchar, baño con tina, internet Wifi gratis, minibar y caja fuerte.<br><br>
				11 Salones<br>
				Versátiles salones dotados para las necesidades de su evento.<br><br>
				Servicios:<br>
				Conserjería / Centro de negocios / Servicio Integral de Seguridad / Lavandería / Parqueadero / Terraza / Servicio de Transporte (No está incluido en la tarifa).<br><br>
				Restaurantes y Bares:<br>
				Restaurante y bar Piso 21 / Lobby bar.
				</p>			

				<a href="#contacto">Reservar</a>	

				<div class="clear"></div>		
			</div>

			<div class="clear"></div>
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