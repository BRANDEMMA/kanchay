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
			<h3>CROWNE PLAZA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/crowne-plaza/crowne-plaza-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/crowne-plaza/crowne-plaza-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/crowne-plaza/crowne-plaza-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/crowne-plaza/crowne-plaza-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/crowne-plaza/crowne-plaza-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/crowne-plaza/crowne-plaza-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Ubicado en el corazón del distrito de Miraflores, a unas cuadras de la playa, el hotel Crowne Plaza Lima es ideal para viajes de negocio o placer. Nuestras céntricas instalaciones en el área comercial de la ciudad, están rodeadas por construcciones coloniales, frondosos parques junto al mar y modernos restaurantes.<br><br>
				Nos encontramos a unos minutos de las Embajadas Inglesa y Canadiense; y a pie desde el hotel, puede llegar a la Playa Costa Verde. Encuentre el regalo perfecto en el Mercado Indígena o en el centro comercial al aire libre Lancomar. Además, los amantes de la historia pueden disfrutar del Museo Nacional de Arqueología, Antropología e Historia.<br><br>
				Con servicio personalizado y amenidades de calidad, el hotel destaca entre otros en Lima. Nuestras instalaciones incluyen un bar en dónde puede probar cócteles de pisco, un spa, un gimnasio con sauna y un patio interior con piscina y jacuzzi bajo un techo de vidrio. Además, contamos con siete salones para eventos, un excelente servicio de catering y moderno equipo audiovisual.
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