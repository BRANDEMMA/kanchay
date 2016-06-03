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

	<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR UN DIV (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-transporte').on('click', function(){
				$('#transporte-todos').slideDown('slow');
				$('#hoteles-todos').css("display","none");
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-hoteles').on('click', function(){
				$('#transporte-todos').css("display","none");
				$('#hoteles-todos').slideDown('slow');				
			});
		});
	</script>

<!--================== 	SCRIPT PARA LLAMAR A DIV OCULTO (TERMINA)  =====================-->

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

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-1b').on('click', function(){
				$('#grande-hotel-1b').show();
				$('#grande-hotel-2b').hide();1
				$('#grande-hotel-3b').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-2b').on('click', function(){
				$('#grande-hotel-2b').show();
				$('#grande-hotel-1b').hide();
				$('#grande-hotel-3b').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-3b').on('click', function(){
				$('#grande-hotel-3b').show();
				$('#grande-hotel-1b').hide();
				$('#grande-hotel-2b').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-1c').on('click', function(){
				$('#grande-hotel-1c').show();
				$('#grande-hotel-2c').hide();1
				$('#grande-hotel-3c').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-2c').on('click', function(){
				$('#grande-hotel-2c').show();
				$('#grande-hotel-1c').hide();
				$('#grande-hotel-3c').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-3c').on('click', function(){
				$('#grande-hotel-3c').show();
				$('#grande-hotel-1c').hide();
				$('#grande-hotel-2c').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-1d').on('click', function(){
				$('#grande-hotel-1d').show();
				$('#grande-hotel-2d').hide();1
				$('#grande-hotel-3d').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-2d').on('click', function(){
				$('#grande-hotel-2d').show();
				$('#grande-hotel-1d').hide();
				$('#grande-hotel-3d').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#mini-hotel-3d').on('click', function(){
				$('#grande-hotel-3d').show();
				$('#grande-hotel-1d').hide();
				$('#grande-hotel-2d').hide();
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
				<h3><a href="">Hoteles</a></h3>
				<img id="mostrar-hoteles" src="img/hoteles-kanchay-peru.png">
			</div>
			
			<div class="transporte">
				<h3><a href="">Transporte</a></h3>
				<img id="mostrar-transporte" src="img/transporte-kanchay-peru.png">
			</div>
		</div>
		

		<div id="hoteles-todos">
			<h3>LISTA DE HOTELES</h3>
			
			<h4><i class="fa fa-caret-right" aria-hidden="true"></i> LIMA</h4>

			<?php
				include 'hoteles-5-estrellas.php';
			?>

			<h4><i class="fa fa-caret-right" aria-hidden="true"></i> CUSCO</h4>

			<?php
				include 'hoteles-4-estrellas+.php';
			?>

			<h4><i class="fa fa-caret-right" aria-hidden="true"></i> OTRA CIUDAD</h4>

			<?php
				include 'hoteles-4-estrellas.php';
			?>

			<h4><i class="fa fa-caret-right" aria-hidden="true"></i> OTRA CIUDAD</h4>

			<?php
				include 'hoteles-3-estrellas.php';
			?>
		</div>

		<div id="transporte-todos" style="display:none;">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i> TRANSPORTES</h3>
			
			<div class="opcion-transporte">
				<a href="transporte-terrestre.php"><img src="img/transporte1.png"></a>
				<h4><a href="transporte-terrestre.php">Terrestre</a></h4>
			</div>

			<div class="opcion-transporte">
				<a href="transporte-aereo.php"><img src="img/transporte2.png"></a>
				<h4><a href="transporte-aereo.php">Aereo</a></h4>
			</div>

			<div class="opcion-transporte">
				<a href="transporte-lacustre.php"><img src="img/transporte3.png"></a>
				<h4><a href="transporte-lacustre.php">Lacustre</a></h4>
			</div>

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