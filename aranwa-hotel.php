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
			<h3>ARANWA CUSCO BOUTIQUE HOTEL</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/aranwa/aranwa-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/aranwa/aranwa-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/aranwa/aranwa-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/aranwa/aranwa-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/aranwa/aranwa-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/aranwa/aranwa-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Aranwa, de 5 estrellas, ocupa una mansión reformada del siglo XVI en el centro de Cusco y presenta una decoración lujosa con elegantes elementos de época y lámparas de araña de cristal.<br><br>
				Las suites del Aranwa Cusco Boutique Hotel son amplias y tienen tapizados de lujo, frescos en las paredes y ramos de lirios frescos. También cuentan con un sistema de oxigenación inteligente. El baño, de mármol, incluye bañera circular.<br><br>
				El personal del Aranwa Cusco organiza excursiones guiadas personalizadas por la localidad de Cusco.<br><br>
				El restaurante gourmet Mishti sirve platos creativos de cocina peruana y el bar Khasikay ofrece tapas y cócteles de pisco. También se ofrece un desayuno delicioso con macedonia de frutas frescas, tortillas y pasteles de chocolate.<br><br>
				El Aranwa Cusco Boutique Hotel está situado a 30 minutos en coche del aeropuerto internacional Velasco Astete. La plaza de Armas se encuentra a 2 calles. Además, hay conexión Wi-Fi gratuita.  
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