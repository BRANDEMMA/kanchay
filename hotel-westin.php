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
				$('#grande-hotel-2a').hide();1
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
			<h3>HOTEL WESTIN</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/westin/westin-4.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/westin/westin-5.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/westin/westin-2.jpg">

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/westin/westin-4.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/westin/westin-5.1.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/westin/westin-2.1.jpg">
			</div>
			<div class="derecha-descripcion">
				<h4>INCLUYE</h4>
				<p>
				Situado en el vibrante distrito financiero y de compras de Lima, el hotel se encuentra a tan solo 15 kilómetros el Aeropuerto Internacional Jorge Chávez (LIM) y a unos minutos de una espléndida selección de restaurantes, galerías y parques, así como de bancos y oficinas corporativas centrales.<br><br>

				Saboree la innovadora cocina peruana a manos del chef Rafael en Maras, nuestro elegante restaurante. Explore las suntuosas posibilidades de temporada y los saludables menús de SuperFoodsRx™ en Market 770, un entorno más informal para el desayuno, almuerzo o cena.<br><br>

				Westin Lima Hotel and convention center es el espacio para convenciones y reuniones más grande en Perú. Además de un tamaño y ámbito excepcional, las 17 salas de reuniones del hotel, y sus 2.529 metros cuadrados de espacio funcional ofrecen instalaciones para presentaciones de vanguardia y un experto personal de apoyo.
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