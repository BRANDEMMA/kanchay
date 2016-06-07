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
			<h3>COSTA DEL SOL WYNDHAM</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/costa-del-sol/costa-del-sol-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/costa-del-sol/costa-del-sol-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/costa-del-sol/costa-del-sol-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/costa-del-sol/costa-del-sol-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/costa-del-sol/costa-del-sol-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/costa-del-sol/costa-del-sol-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Costa del Sol Wyndham Limase encuentra en Lima. Alberga una majestuosa piscina exterior en la planta superior abierta todo el año y ofrece WiFi gratuita y desayuno buffet a diario.<br><br>
				Las habitaciones del Costa del Sol Wyndham Lima están decoradas con buen gusto y disponen de baño privado, TV por cable, aire acondicionado y minibar. Algunas tienen terraza.<br><br>
				El establecimiento cuenta con centro de fitness compartido, spa con servicio de masajes por un suplemento y sauna, 7 salas de reuniones, servicio de lavandería y aparcamiento gratuito.<br><br>
				El Costa del Sol Wyndham Lima alberga el restaurante Paprika Lima, que sirve platos locales e internacionales. El bar Walak ofrece bebidas y aperitivos durante todo el día.<br><br>
				El hotel goza de una ubicación privilegiada en la zona financiera y comercial de la ciudad, a 700 metros del club de golf San Isidro y a 12 km del aeropuerto internacional Jorge Chávez. 
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