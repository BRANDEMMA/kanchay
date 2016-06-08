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
			<h3>PALACIO DEL INKA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/palacio-del-inka/palacio-del-inka-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/palacio-del-inka/palacio-del-inka-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/palacio-del-inka/palacio-del-inka-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/palacio-del-inka/palacio-del-inka-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/palacio-del-inka/palacio-del-inka-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/palacio-del-inka/palacio-del-inka-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Palacio del Inka, A Luxury Collection Hotel se encuentra en el centro de Cusco, frente al templo Koricancha. El establecimiento está a poca distancia a pie de la estación de tren central. Hay conexión WiFi gratuita en todas las instalaciones.<br><br>
				Las habitaciones presentan una decoración moderna y elegante. Disponen de calefacción, TV por cable, 1 cama doble o 2 individuales, ropa de cama de calidad y baño amplio. Se ofrece oxígeno en las suites bajo petición para ayudar con los efectos de la altitud del Cusco.<br><br>
				El restaurante prepara platos de cocina local e internacional. También hay un bar, que ofrece vistas excepcionales y bebidas.<br><br>
				El Palacio del Inka, A Luxury Collection Hotel cuenta con gimnasio. El Palacio del Inka también está asociado con la agencia de viajes Tikariy, que ofrece asistencia para organizar excursiones por la ciudad.<br><br>
				Los huéspedes pueden visitar el hotel Tambo del Inka, a Luxury Collection Resort & Spa, ubicado en Urubamba, a solo 1 hora y media en coche de Cusco.  
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