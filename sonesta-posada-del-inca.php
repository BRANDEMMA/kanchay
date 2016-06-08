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
			<h3>SONESTA POSADA DEL INCA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/sonesata/sonesata-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/sonesata/sonesata-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/sonesata/sonesata-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/sonesata/sonesata-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/sonesata/sonesata-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/sonesata/sonesata-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Encuentra un oasis natural en el corazón de la ciudad. De un paseo por pirámides ancestrales y gloriosas catedrales. Vaya de compras y baile por las noches. Desde atractivos naturales hasta los más espectaculares centros comerciales, todo lo encontrará aquí.<br><br>
				Ubicado en el atractivo distrito de San Isidro en Lima, Sonesta Hotel El Olivar ofrece fácil acceso a los encantos de esta ciudad, boutiques y centros comerciales, restaurantes y vida nocturna. Este exclusivo hotel de 134 habitaciones, posee la calma del majestuoso bosque El Olivar, junto con la comodidad y servicios que sólo un hotel cinco estrellas puede ofrecer. Reconocido como uno de los mejores hoteles de Lima, Sonesta Hotel El Olivar ofrece también un fino restaurante con lo mejor de la gastronomía local e internacional, piscina al aire libre, gimnasio, salas para eventos completamente equipadas con tecnología de punta,  centro de negocios y servicio al huésped las 24 horas del día.
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