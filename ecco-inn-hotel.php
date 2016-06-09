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
			<h3>ECCO INN HOTEL</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/ecco-inn/ecco-inn-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/ecco-inn/ecco-inn-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/ecco-inn/ecco-inn-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/ecco-inn/ecco-inn-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/ecco-inn/ecco-inn-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/ecco-inn/ecco-inn-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Eco Inn está a pocos metros de la plaza principal de Cusco, frente al mercado de artesanía más grande de la ciudad. Dispone de habitaciones modernas con desayuno bufé incluido.<br><br>
				Todas las habitaciones incluyen TV LCD de pantalla plana por cable, y algunas tienen balcón. Hay conexión a internet por cable gratuita en todo el establecimiento.<br><br>
				El Inka Tak Spa del Eco Inn ofrece un ambiente único en el que podrá disfrutar de tratamientos especiales y masajes de relajación. Para ello, se utilizan elementos y técnicas especiales de la cultura inca, que revitalizan el cuerpo, la mente y el espíritu. Dispone de una sauna, una bañera de hidromasaje y una sala de oxígeno especial.<br><br>
				El Atrium Café presenta una decoración con fuentes y ofrece conexión Wi-Fi gratuita. 
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