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
				<a href="servicios.php#hoteles-todos"><img src="img/hoteles-kanchay-peru.png"></a>
			</div>
			
			<div class="transporte">
				<h3><a href="servicios-transporte.php">Lacustre</a></h3>
				<a href="servicios-transporte.php#transporte-todos"><img src="img/transporte3.png"></a>
			</div>
		</div>
		

		<div class="contenedor-lacustre" id="contenedor-lacustre">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i> TRANSPORTE EN EL LAGO TITICACA</h3>
			
			<div class="opcion-lacustre">
				<div class="izquierda-lacustre">
					<img src="img/transporte-lacustre.png">
				</div>
				<!-- <div class="derecha-lacustre">
					<h5>CATAMARAN</h5>
					<p>• Servicio a bordo<br>
					• Equipo salvavidas<br>
					• GPS<br>
					• Lorem ipsum<br>
					• Video TV<br>
					• Lorem ipsum<br>
					• Ipsum lorem<br>
					• AUDIO<br>
					• Velocidad controlada</p>
				</div> -->

				<div class="clear"></div>
			</div>
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