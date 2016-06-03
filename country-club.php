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
			<h3>COUNTRY CLUB</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/country-club/country-club-1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/country-club/country-club-4.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/country-club/country-club-5.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/country-club/country-club-1.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/country-club/country-club-4.1.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/country-club/country-club-5.1.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				Ubicado en el prestigioso distrito de San Isidro en Lima y rodeado de elegantes embajadas, el Country Club Lima Hotel es un hotel de lujo que personifica la sofisticación y uno de los pocos hoteles reconocidos como Patrimonio Cultural del Perú.<br><br>

				Cada detalle ha sido concebido con el lujo en mente; candelabros adornados complementan unos techos altos con vigas de madera y 300 piezas de arte originales - cedidas por el Museo Pedro de Osma - adornan las paredes. Cada una de las 83 privadas habitaciones y suites de lujo son opulentas y acogedoras, y muchas de ellas disponen de delicados baños de mármol y relajantes jacuzzis. Disfrute de unas instalaciones de primera clase, de un restaurante premiado   como el mejor restaurante de hotel por cinco años consecutivos - Premios SUMMUM y poder disfrutar del exclusivo Lima Golf Club, todo en un ambiente de calidez e intimidad. El Country Club Lima Hotel invita al viajero de gustos exigentes a disfrutar de lo mejor que Lima tiene para ofrecer.<br><br>

				El country club cuenta: con Business Center 24 horas<br><br>
				Equipado con modernas computadoras, fotocopiadora, fax y servicios de mensajería, acceso a Internet Wi-Fi, gimnasio, golf y cambio de moneda.<br><br>
				En recepción cambiamos dólares o euros a dinero peruano (nuevos soles). Todas las habitaciones disponen de una caja de seguridad que se encuentra dentro del armario (con manual de instrucciones), y que permite almacenar de manera segura sus objetos de valor.<br><br>

				Periódicos:	El "International Times Digest" está disponible en recepción, Servicio de lavandería y planchado, Cunas y sillas para niños y bebés, Yaku SpaDeje Remisse.
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