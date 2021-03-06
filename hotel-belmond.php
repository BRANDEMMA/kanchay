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
			<h3>HOTEL BELMOND</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/belmond/beldmon-5.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/belmond/beldmon-3.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/belmond/beldmon-2.jpg">

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/belmond/beldmon-5.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/belmond/beldmon-3.1.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/belmond/beldmon-2.1.jpg">
				<p></p>
			</div>
			<div class="derecha-descripcion">
				<p>
				Situado en una de las zonas más de moda de Lima, el Belmond Miraflores Park le lleva directo al corazón de lo mejor de esta gran ciudad. Conocido por su ubicación junto al Océano Pacífico, este hotel de lujo goza de vistas espectaculares hacia el mar.<br><br>

				Belmond Miraflores Park combina un servicio personalizado, restaurantes excepcionales e instalaciones de lujo para crear la base perfecta desde donde podrá salir a explorar. Arquitectura colonial, magníficos museos exhibiendo oro inca y antigüedades pre-colombinas, y las glamurosas tiendas, bares y restaurantes están a sólo pasos del hotel.Además cuenta con una piscina climatizada de la terraza del hotel, donde podrá deleitarse con unas vistas impresionantes de Lima y el Océano Pacífico. La piscina ofrece unas medidas de 17 x 5 m y tiene 1,6 m de profundidad en la zona más baja y 2,2 m en la más profunda, por lo que es ideal para adultos y niños.El horario de apertura de 6:00 a. m. a 10:00 p. M y en verano de 10:00 a. m. a 6:00 p. m. Tambien posee un Lounge Ejecutivo situado en la planta 10 del edificio.Este salón está abierto todo el día y cuenta con una desayuno de cortesía, té de la tarde, aperitivos, tapas, refrescos y bebidas alcoholicas.Otros servicios incluyen periodicos diarios, el embalaje y desembalaje de su maleta, internet inalámbrico y un conserje privado.
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