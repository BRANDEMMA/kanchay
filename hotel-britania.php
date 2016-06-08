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
			<h3>HOTEL BRITANIA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/britania/britania-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/britania/britania-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/britania/britania-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/britania/britania-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/britania/britania-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/britania/britania-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Hotel Britania Miraflores está situado en el distrito de Miraflores, junto a la histórica Huaca Pucllana, y dispone de habitaciones modernas con TV por cable y conexión WiFi gratuita. Hay aparcamiento privado gratuito.<br><br>
				Los ordenadores con conexión a internet gratuita están en el vestíbulo.<br><br>
				Entre las instalaciones del Hotel Miraflores se incluye bar restaurante. Hay servicio de camarera de pisos diario disponible. El servicio de lavandería conlleva un suplemento.<br><br>
				El hotel goza de una ubicación excelente, a 2 minutos a pie del parque Kennedy, que alberga gran variedad de restaurantes, pubs y tiendas. Además, está a 15 minutos a pie del centro comercial Larcomar y a 45 minutos en coche del aeropuerto Jorge Chávez. Hay servicio de traslado disponible por un suplemento. 
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