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
			<h3>INKATERRA LA CASONA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/inkaterra/inkaterra-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/inkaterra/inkaterra-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/inkaterra/inkaterra-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/inkaterra/inkaterra-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/inkaterra/inkaterra-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/inkaterra/inkaterra-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Inkaterra ocupa una mansión colonial histórica y exclusiva y ofrece alojamiento de lujo con chimeneas de mármol, una galería española de piedra decorada y un patio central. Hay WiFi gratuita y servicio de masajes disponible con reserva previa.<br><br>
				El Inkaterra La Casona está decorado con lámparas de araña antiguas, muebles de mármol y columnas de estilo barroco. Los huéspedes tienen a su disposición guías y conductores privados para explorar Cuzco y el valle Sagrado.<br><br>
				Las habitaciones presentan muebles elegantes y paneles de madera oscura grabados e incluyen TV por cable, minibar, zona de estar, sofás de color burdeos oscuro y alfombras y tejidos lujosos.<br><br>
				En el baño hay una bañera con patas, revestida completamente de piedra.<br><br>
				Todos los días se sirve un desayuno buffet con productos regionales. Además, hay servicio de habitaciones.<br><br>
				El Inkaterra se encuentra cerca del Museo de Arte Precolombino y a 10 minutos en coche del aeropuerto de Cuzco. La recepción está abierta las 24 horas. 
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