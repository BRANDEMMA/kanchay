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
			<h3>DOUBLE TREE PARDO HOTEL</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/double-tree-pardo-hotel/double-tree-pardo-hotel-1.5.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/double-tree-pardo-hotel/double-tree-pardo-hotel-1.4.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/double-tree-pardo-hotel/double-tree-pardo-hotel-1.1.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/double-tree-pardo-hotel/double-tree-pardo-hotel-2.5.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/double-tree-pardo-hotel/double-tree-pardo-hotel-2.4.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/double-tree-pardo-hotel/double-tree-pardo-hotel-2.1.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				A tu llegada al hotel El Pardo DoubleTree by Hilton, podrás admirar las obras de arte peruano contemporáneo del lobby, además de disfrutar de una acogedora bienvenida con las galletas con pedacitos de chocolate. Ubicado en el centro de Miraflores, el distrito más cosmopolita de Lima, este hotel en Lima se encuentra a 30 minutos del Aeropuerto Internacional Jorge Chávez (LIM).<br><br>
				Descansa en cómodas habitaciones y acogedoras suites, equipadas con WiFi de cortesía, estaciones de trabajo y televisores de 47 pulgadas con 80 canales. El gimnasio cuenta con modernos equipos cardiovasculares y pesas para personalizar cualquier rutina de ejercicio. Nada en la piscina de la planta 11 y disfruta de una espectacular vista de Lima desde la terraza para tomar sol.
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