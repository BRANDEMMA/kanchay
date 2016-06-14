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
			<h3>NOVOTEL CUSCO</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/novotel-cuzco/novotel-cuzco-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/novotel-cuzco/novotel-cuzco-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/novotel-cuzco/novotel-cuzco-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/novotel-cuzco/novotel-cuzco-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/novotel-cuzco/novotel-cuzco-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/novotel-cuzco/novotel-cuzco-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Novotel Cusco está situado en un edificio del s. XVI, en Cusco, y ofrece habitaciones modernas, con calefacción y TV por cable. Está a sólo 3 calles de la Plaza de Armas y de la catedral.<br><br>
				Todas las habitaciones del Cusco Novotel están equipadas con minibar, escritorio y baño privado. Algunas también cuentan con TV de pantalla plana. El servicio de habitaciones está disponible las 24 horas, todos los días.<br><br>
				Se sirve cocina internacional y local en el restaurante La Cave o en el patio climatizado, cubierto con un techo de cristal espectacular. Además, el bar ofrece una gran variedad de bebidas y de aperitivos.<br><br>
				Los ordenadores compartidos del Novotel Cusco tienen conexión Wi-Fi gratuita. El hotel también ofrece recepción 24 horas, servicio de alquiler de bicicletas y mostrador de información turística.
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