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
		<img class="portada-gastronomia" src="img/portada-tours.jpg">

		<div class="gastronomia-peru">
			<h3>Gastronomía del Perú</h3>
			<div class="izquierda-gastronomia">
			<p>
				El Perú es altamente reconocido por su gastronomía debido a que esta es el resultado de la fusión de las técnicas culinarias el antiguo Perú con las técnicas traidas por los españoles, los asiaticos, los africanos y todas las culturas con las que la civilización peruana tuvo contacto. <br><br>
				Esta fusión revolucionó el sabor de cada plato haciendo que degustar comida peruana se convirtiera en un deleite para el paladar por su intenso sabor. Además, el degustar diversas comidas el comensal no siente monotonía, debido a la existencia de sabores de los 4 continentes en una sola cocina.<br><br>
				Entre los platos representativos de esta gastronomía tenemos: el ceviche, la carapulcra, el lomo saltado, el cuy colorado, los anticuchos, etc.</p>
			</div>

			<div class="derecha-gastronomia">
				<p>
				Entre los postres representativos tenemos al arroz zambito, el suspiro a la limeña, la mazamorra morada, los alfajores, etc.<br><br> 
				Entre las bebidas tradicionales están presentes la chica de jora, la chicha morada, el pisco,la cachina, etc.</p>
				<!-- <img src="img/comida.png"> -->
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