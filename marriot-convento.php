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
			<h3>JW MARRIOT CONVENTO</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/el-convento/el-convento-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/el-convento/el-convento-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/el-convento/el-convento-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/el-convento/el-convento-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/el-convento/el-convento-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/el-convento/el-convento-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Hotel JW Marriott El Convento Cusco está a tan sólo 3 horas de Machu Picchu y a pocas calles del centro de la ciudad.<br><br>

				Las habitaciones cuentan con aire acondicionado y calefacción, TV por cable, minibar, acceso a Internet, cafetera, secadora, plancha, caja de seguridad y baño privado provisto con bañera y ducha independiente. El hotel pone a tu servicio servicios tales como gimnasio, servicio de masajes, piscina cubierta, restaurante, bar, conexión a Internet WiFi de pago, servicio de habitaciones, recepción abierta la 24 horas y guardaequipaje.<br><br>

				También podrás hacer uso de servicio de lavandería y de limpieza en seco de manera que puedas tener tu ropa siempre limpia y a disposición en todo momento para cualquier circunstancias, salas de reuniones o banquetes para cualquier evento especial que tengas programado o desees realizar durante tu estancia, centro de negocios, servicio de fotocopiadora, prensa para cualquier tipo de documentación, caja fuerte para guardar tus pertenencias más valiosas, ascensor y calefacción para la mayor comodidad.
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