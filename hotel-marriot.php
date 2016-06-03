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
				<a href="servicios.php"><img src="img/hoteles-kanchay-peru.png"></a>
			</div>
			
			<div class="transporte">
				<h3><a href="servicios-transporte.php">Transporte</a></h3>
				<a href="servicios-transporte.php"><img src="img/transporte-kanchay-peru.png"></a>
			</div>
		</div>
		

		<div class="hoteles-descripcion">
			<h3>J.W MARRIOT HOTEL</h3>
			<div class="izquierda-descripcion">
				<img src="img/hoteles/marriot/marriot.jpg"> 
				<p>Disfrute de unas maravillosas vistas al mar desde nuestro hotel en Miraflores. Situado frente a los imponentes acantilados del distrito de Miraflores, el JW Marriott Hotel Lima ofrece 300 habitaciones con una vista panorámica del Océano Pacífico.</p>
			</div>
			<div class="derecha-descripcion">
				<h4>INCLUYE</h4>
				<p>
				Gracias a su privilegiada ubicación, la vista espectacular al mar, su servicio personalizado y sus productos de alta calidad, nuestro hotel en Perú se convierte en la mejor opción entre los hoteles de Lima. Frente al hotel se encuentra el conocido Centro Comercial Larcomar, donde la vista panorámica del litoral limeño se mezcla con la arquitectura futurista. Larcomar contiene no sólo tiendas sino un centro cultural con lo mejor en servicios y entretenimiento. Una de las características más notables de nuestro hotel es la lujosa torre de cristal de 25 pisos convirtiendo al JW Marriott Hotel Lima en uno de los hoteles más emblemáticos de Lima. Además, el hotel cuenta con tiendas exclusivas, restaurantes de lujo, un Lounge Bar, un Health Club Spa y servicio de habitación las 24 horas para una estancia en Lima.
				</p>			

				<a href="">Reservar</a>	

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