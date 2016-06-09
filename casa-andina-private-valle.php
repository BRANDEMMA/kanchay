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
			<h3>CASA ANDINA PRIVATE COLLECTION</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/casa-andina-valle-sagrado/casa-andina-valle-sagrado-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/casa-andina-valle-sagrado/casa-andina-valle-sagrado-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/casa-andina-valle-sagrado/casa-andina-valle-sagrado-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/casa-andina-valle-sagrado/casa-andina-valle-sagrado-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/casa-andina-valle-sagrado/casa-andina-valle-sagrado-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/casa-andina-valle-sagrado/casa-andina-valle-sagrado-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				La Casa Andina Private Collection Cusco está situada en el centro de Cuzco y ofrece vistas a la plaza Limacpampa y habitaciones tradicionales que dan a un patio. Está a pocos pasos de la Plaza de Armas y del Coricancha y sirve un desayuno gratuito. Se proporciona WiFi gratuita en las zonas comunes y WiFi de pago en las habitaciones.<br><br>
				Las habitaciones de la Casa Andina Private Collection Cusco están distribuidas alrededor de patios de estilo colonial con balcones de madera. Todas las habitaciones y suites disponen de TV por cable.<br><br>
				El restaurante gourmet de la Casa Andina, el Alma Restaurante & Bar, ofrece productos frescos del Valle Sagrado y especialidades andinas. El bar de estilo colonial sirve bebidas por las noches, que se pueden disfrutar en la terraza.<br><br>
				El establecimiento también alberga una sala de estar y de lectura con chimenea. El aeropuerto se encuentra a 10 minutos en coche. 
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