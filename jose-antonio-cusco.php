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
			<h3>JOSE ANTONIO HOTEL CUSCO</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/jose-antonio-cuzco/jose-antonio-cuzco-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/jose-antonio-cuzco/jose-antonio-cuzco-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/jose-antonio-cuzco/jose-antonio-cuzco-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/jose-antonio-cuzco/jose-antonio-cuzco-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/jose-antonio-cuzco/jose-antonio-cuzco-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/jose-antonio-cuzco/jose-antonio-cuzco-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Este hotel de 4 estrellas está situado en el corazón de Perú, a 10 minutos a pie de la Plaza de Armas. Presenta un diseño colonial y ofrece conexión Wi-Fi y aparcamiento gratuitos.<br><br>
				Las habitaciones del hotel Jose Antonio cuentan con aire acondicionado, TV por cable, reproductor de DVD y baño de mármol con bañera.<br><br>
				El restaurante El Rejo sirve platos de cocina peruana y el bar El Molino ofrece una gran variedad de cócteles. Este establecimiento también dispone de bañera de hidromasaje y sauna.<br><br>
				El hotel Jose Antonio está a 15 minutos a pie de la catedral de Cusco y el aeropuerto Alejandro Velasco Astete se encuentra a 4,5 km de distancia. 
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