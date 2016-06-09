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
			<h3>SONESTA POSADA DEL INCA YUCAY</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/posada-inca-yucay/posada-inca-yucay-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/posada-inca-yucay/posada-inca-yucay-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/posada-inca-yucay/posada-inca-yucay-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/posada-inca-yucay/posada-inca-yucay-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/posada-inca-yucay/posada-inca-yucay-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/posada-inca-yucay/posada-inca-yucay-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Ubicado en un antiguo monasterio reformado de estilo colonial, este hotel se encuentra en el Valle Sagrado, entre Cusco y Macchu Picchu. Cuenta con conexión inalámbrica a internet gratuita y un mostrador de información turística donde se ofrecen excursiones.<br><br>
				Las habitaciones del Sonesta Posada del Inca Yucay combinan un alojamiento contemporáneo con elementos decorativos rústicos. Cada una incluye una TV y un baño privado con bañera. Algunas habitaciones cuentan con una gran TV de pantalla plana y una zona de estar.<br><br>
				Los huéspedes pueden disfrutar de un menú a base de especialidades andinas con un toque moderno en el restaurante Inkafé. Éste alberga una terraza exterior con vistas a un jardín con instalaciones de barbacoa.<br><br>
				El Sonesta Posada del Inca Yucay ofrece actividades como trekking y paseos a caballo, que podrá practicar en su entorno natural a lo largo del río Urubamba. También ofrece una recepción 24 horas y un aparcamiento privado gratuito.
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