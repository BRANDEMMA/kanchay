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
			<h3>SOL Y LUNA</h3>
			<div class="izquierda-descripcion">
				<img id="grande-hotel-1a" src="img/hoteles/sol-luna/sol-luna-1.1.jpg">
				<img id="grande-hotel-2a" style="display:none;" src="img/hoteles/sol-luna/sol-luna-1.2.jpg">
				<img id="grande-hotel-3a" style="display:none;" src="img/hoteles/sol-luna/sol-luna-1.3.jpg"> 

				<img id="mini-hotel-1a" class="img-mini" src="img/hoteles/sol-luna/sol-luna-2.1.jpg">
				<img id="mini-hotel-2a" class="img-mini" src="img/hoteles/sol-luna/sol-luna-2.2.jpg">
				<img id="mini-hotel-3a" class="img-mini" src="img/hoteles/sol-luna/sol-luna-2.3.jpg">
			</div>
			<div class="derecha-descripcion">
				<p>
				El Sol y Luna ocupa bungalows preciosos decorados en estilo peruano con spa, gimnasio y sauna. Ofrece habitaciones con WiFi gratuita y vistas al valle de Urubamba. Además, hay restaurante.<br><br>
				Las habitaciones del Sol y Luna están decoradas con temas tradicionales andinos y constan de muebles elegantes. Todas tienen calefacción y baño privado.<br><br>
				Todos los días se sirve un desayuno buffet. El restaurante también prepara especialidades peruanas y platos internacionales.<br><br>
				El spa alberga un centro de fitness y una sauna. También propone una amplia variedad de tratamientos de belleza. El establecimiento organiza clases de yoga y taichi. Asimismo, hay un servicio de préstamo de bicicletas.
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