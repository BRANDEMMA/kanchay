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
			<h3>LA HACIENDA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/la-hacienda/la-hacienda-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/la-hacienda/la-hacienda-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/la-hacienda/la-hacienda-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/la-hacienda/la-hacienda-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/la-hacienda/la-hacienda-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/la-hacienda/la-hacienda-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Este hotel de 4 estrellas está situado en el barrio de Miraflores, a solo 20 minutos en coche del aeropuerto. Se encuentra cerca de la playa Makaha y a 10 minutos a pie del centro comercial Larcomar.<br><br>
				Las cómodas habitaciones de La Hacienda Hotel & Casino disponen de camas grandes y extragrandes, TV por cable de 21 pulgadas y ventanas insonorizadas.<br><br>
				El establecimiento alberga el restaurante El Algarrobo, donde se puede disfrutar de la gastronomía peruana, así como de algunos platos internacionales clásicos.<br><br>
				El casino del hotel está abierto las 24 horas, ofrece aperitivos y cuenta con un servicio de bar excelente, aparcamiento gratuito, servicio de aparcacoches y sistema de seguridad excelente.<br><br>
				En la zona de La Hacienda Hotel hay una tumba precolombina, tiendas de artesanía y calles históricas pequeñas. <br><br>
				Miraflores es una opción genial para los viajeros interesados en la cocina gourmet, la cultura y visitar museos.
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