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
			<h3>COURTYARD LIMA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/courtyard/courtyard-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/courtyard/courtyard-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/courtyard/courtyard-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/courtyard/courtyard-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/courtyard/courtyard-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/courtyard/courtyard-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Con una ubicación privilegiada en el distrito de Miraflores, el hotel Courtyard Lima Miraflores le ofrece el mejor alojamiento y servicio durante su estancia en Lima. Las habitaciones de nuestro hotel en Miraflores cuentan con toques elegantes y excelentes instalaciones con Wi-Fi gratis y áreas separadas para leer, dormir y disfrutar de una amplia variedad de entretenimiento en todas las instalaciones.<br><br>
				Empiece el día en Lima, Perú, con un delicioso desayuno buffet en el restaurante de nuestro hotel en Miraflores, o manténgase en forma en el moderno gimnasio del hotel. Descubra el fácil acceso a las últimas noticias, al estado del tiempo y a las condiciones del aeropuerto mediante la tecnología del GoBoard.<br><br>
				Si desea organizar un evento en Lima descubra los diversos servicios de planificación, recepciones excepcionales y nuestros salones para eventos en Miraflores. Nuestro hotel le sitúa al alcance de muchas de las atracciones más notables de Lima, como el Parque Kennedy en Miraflores y el distrito de Barranco. Si usted está en Lima por negocios o por placer, Courtyard Lima Miraflores puede ayudarle a sacar el máximo provecho de su visita en Miraflores.
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