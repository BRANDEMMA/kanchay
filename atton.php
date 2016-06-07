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
			<h3>ATTON SAN ISIDRO</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/atton/atton-1.2.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/atton/atton-1.3.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/atton/atton-1.4.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/atton/atton-2.2.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/atton/atton-2.3.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/atton/atton-2.4.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El primero de nuestros hoteles en expandirse en territorio internacional, Atton San Isidro es el ejemplo perfecto de la arquitectura moderna con la elegancia rústica. Inaugurado en 2011 en Lima, esta joya de 9 pisos es donde se encuentra la comodidad y simplicidad. Situado a pocos minutos de los centros comerciales y financieros de San Isidro, Atton San Isidro ofrece comodidad y tranquilidad al viajero de negocios y al turista.<br><br>
				Contamos con 252 amplias habitaciones completamente equipadas, TV por cable, Internet, mini bar y caja de seguridad, son algunos de los servicios que ofrecemos. Solo con una mirada a una de nuestras habitaciones y usted se sentirá como en casa. Descanse en nuestras camas que inducen el sueño, y que ofrecen descanso y comodidad sin igual. Gracias a las ventanas termo-acústicas que bloquean el ruido de la ciudad, siempre estará en paz durante su estadía con nosotros.

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