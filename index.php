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
	<link rel="stylesheet" href="css/lightbox.min.css">

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

	<div id="contenedor-slider">
		<div id="slider">
			<section>
				<img src="img/slider.jpg">
			</section>
			<section>
				<img src="img/slider2.jpg">
			</section>
			<section>
				<img src="img/slider3.jpg">
			</section>
			<div id="btn-prev">
				<img src="img/izquierda-rochikahn.gif">
			</div>
			<div id="btn-next">
				<img src="img/derecha-rochikahn.gif">
			</div>
			<script src="js/slider.js"></script>
		</div>
	</div>

	<div class="informacion-contacto">
		<h2>CONTÁCTENOS <img src="img/mensaje2.png"> <span>Peruvian Paradise</span></h2>
		<div class="datos">
			<img src="img/ubicacion.png">
			<p>			
			<span>Dirección:</span><br>
			Edificio las Moreras 810 Residencial<br>
			San Felipe Jesús María<br>
			Lima, Perú
			</p>
		</div>
		<div class="datos">
			<img src="img/mensaje.png">
			<p>
			<span>E-Mail:</span><br>
			<a href="mailto:informes@kanchay.com">informes@kanchay.com</a><br>
			</p>
		</div>
		<div class="datos">
			<img src="img/telefono.png">
			<p>
			<span>Teléfono:</span><br>
			<a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
			</p>
		</div>
		<div class="clear"></div>
	</div>

	<div class="nosotros" id="nosotros">
		<div class="izquierda-nosotros">
			<img src="img/maleta-kanchay-peru.png">
		</div>
		<div class="derecha-nosotros">
			<img src="img/logo-kanchay-peru.png">
			<h3>Porqué preferir K´anchay Peru?</h3>
			<p>Porqué es una empresa Turística especialmente creada con el objetivo de otorgar una satisfacción total en los servicios que requieras. Toda vez recibida la petición y con suma satisfacción, nos comprometemos en ser los mejores del mercado local; ofreciéndote expertos profesionales con una atención personalizada de primer nivel: 24 horas al día, 7 días a la semana y todo el año, siempre, siempre, siempre.</p>
			<!-- <h3>Nuestra gente</h3>
			<p>
			La unión de dos profesionales de ramas diferentes del servicio al cliente originó K´anchay Peru: José Fernando Benaducci Otayza, Guía Oficial de Turismo, Gerente General de la empresa, teniendo 27 años de experiencia, en el trato directo al público usuario y visitante, en Turismo receptivo y local. Además, tuvo una participación muy importante en el entrenamiento docente a otros guías de turismo del mercado local Lima, al igual que numerosos contactos del medio turístico para la atención y distribución de su carrera. Jerry Rolando Lolandes Arbayza, Consultor Financiero, con sede en la ciudad de Miami, quien con el interés de nuestro patrimonio es el principal promotor de nuestro país y de la empresa en el extranjero.</p> -->
			
			<a class="boton-ver-mas" href="nosotros.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <strong>Ver más</strong></a>
		
		</div>
		<div class="clear"></div>		
	</div>

	<div class="contenedor-servicios">
		<div class="servicios">			
			<div class="izquierda-servicios">
				<div class="titulo-servicios"><img src="img/servicios-kanchay-peru.png"><h2>SERVICIOS</h2></div>
				<a href="servicios.php"><img src="img/hoteles-kanchay-peru.png"></a>
				<h3><a href="servicios.php">Hoteles</a></h3>
				<a href="servicios-transporte.php"><img src="img/transporte-kanchay-peru.png"></a>
				<h3><a href="servicios-transporte.php">Transporte</a></h3>
			</div>
			<div class="derecha-servicios">
				<img src="img/servicios-baile.png">
			</div>
			<div class="clear"></div>
		</div>
	</div>	

	<div class="contenedor-paquetes" id="tours">
		<div class="titulo-paquetes"><img src="img/paquetes-kanchay-peru.png"><h2>TOURS</h2></div>
		<div class="contenedor-slider-flechas">
			<div id="contenedor-slider-paquetes">
				<div id="slider-paquetes">
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour0.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>Machu Pichu</h4>
								<h5>CUSCO INOLVIDABLE &nbsp;&nbsp;&nbsp;&nbsp; 04 Días / 03 Noches</h5>
								<p><span>DÍA 01:</span> CUSCO: EXCURSION CIUDAD & RUINAS CERCANAS<br>
								<span>DÍA 02:</span> CUSCO – PISAC & OLLANTAYTAMBO – CUSCO<br>
								<span>DÍA 03:</span> CUSCO – MACHU PICCHU – CUSCO (D, A)<br>
								<span>DÍA 04:</span> CUSCO – SALIDA (D)<br><br>

								<span>IMPORTANTE:</span><br><br>

								•  Programas a machu picchu incluyen tren expediition, si desean viajar en tren vistadome agregar $ 35.00.<br>
								•  Sugerimos tomar el almuerzo en machu picchu sanctuary lodge para tener más tiempo. se debera agregar usd$ 35.00.<br> 
								•  Tarifas en dolares americanos, para pagar en soles aplicar el tipo de cambio del día (bcr).<br>
								•  No incluyen los tickets aéreos. <br> 
								•  No incluyen propinas , ni tickets adicionales a visitas que no figuran en este programa.<br><br>


								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Cel : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="machu-picchu.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>City Tour Lima</h4>
								<p><span>HORARIOS:</span><br><br>
								9:00 AM<br>
								14:00 PM<br><br>

								<span>DURACIÓN:</span><br><br>
								03 a 3 1/2 horas <br><br>

								<span>INCLUYE:</span><br><br>
								Transporte Turístico, Guía Oficial de Turismo, Tickets de ingreso a los atractivos en mención <br><br>

								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Tlf : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="city-tour-lima.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour2.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>Museo Larco Herrera</h4>
								<!-- <h5>CUSCO INOLVIDABLE &nbsp;&nbsp;&nbsp;&nbsp; 04 Días / 03 Noches</h5> -->
								<p>Colección particular perteneciente a la Familia Larco Herrera- Hoyle, que incluye la más completa e impresionante colección de piezas cerámicas de arte Peruano Pre-Colombino.<br><br><br>
								<span>DURACIÓN:</span><br><br>
								03 horas <br><br>

								<span>INCLUYE:</span><br><br>
								Transporte Turístico, Guía Oficial de Turismo, Tickets de ingreso a los atractivos en mención<br><br>

								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Tlf : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="museo-larco-herrera.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour3.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>Museo de Oro y Armas del Perú</h4>
								<!-- <h5>CUSCO INOLVIDABLE &nbsp;&nbsp;&nbsp;&nbsp; 04 Días / 03 Noches</h5> -->
								<p>Colección particular perteneciente a la fundación Miguel Mujica Gallo<br><br>

								<span>DURACIÓN:</span><br><br>
								03 horas <br><br>

								<span>INCLUYE:</span><br><br>
								Transporte Turístico, Guía Oficial de Turismo, Tickets de ingreso a los atractivos en mención<br><br>

								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Tlf : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="museo-oro-armas-peru.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour4.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>Complejo Arqueológico de Pachacamac</h4>
								<!-- <h5>CUSCO INOLVIDABLE &nbsp;&nbsp;&nbsp;&nbsp; 04 Días / 03 Noches</h5> -->
								<p>Ubicado en el distrito de Lurín – Pachacamac.<br><br>

								<span>DURACIÓN:</span><br><br>
								03 horas aproximadamente<br><br>

								<span>INCLUYE:</span><br><br>
								Transporte Turístico, Guía Oficial de Turismo, Guía Oficial de Turismo, Tickets de ingreso a los atractivos en mención<br><br>

								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Tlf : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="complejo-arqueologico-pachacamac.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour5.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>Show de Caballo Peruano de Paso</h4>
								<!-- <h5>CUSCO INOLVIDABLE &nbsp;&nbsp;&nbsp;&nbsp; 04 Días / 03 Noches</h5> -->
								<p>Orgullo del Perú y tradicional paso del caballo Peruano.<br><br>

								<span>DURACIÓN:</span><br><br>
								05 horas aproximadamente<br><br>

								<span>INCLUYE:</span><br><br>
								Transporte Turístico, Guía Oficial de Turismo, Pisco sour de cortesía, Almuerzo en la hacienda, Tickets de ingreso a los atractivos en mención<br><br>

								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Tlf : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="show-caballo-peruano.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour6.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>Ciudad Sagrada de Caral</h4>
								<!-- <h5>CUSCO INOLVIDABLE &nbsp;&nbsp;&nbsp;&nbsp; 04 Días / 03 Noches</h5> -->
								<p>Caral se halla situado en el distrito de Supe de la provincia de Barranca del departamento de Lima, a 184 km al norte de Lima Metropolitana, y a 23 km de la costa del Océano Pacífico, en un espacio geográfico conocido como el Norte Chico.<br><br>

								<span>DURACIÓN:</span><br><br>
								08 horas aproximadamente<br><br>

								<span>INCLUYE:</span><br><br>
								Transporte Turístico, Guía Oficial de Turismo, Guía local en Caral, Tickets de ingreso, Box lunch.<br><br>

								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Tlf : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="ciudad-sagrada-caral.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
					<section>
						<div class="opcion-slider-tour">
							<div class="imagen-slider-tour">
								<img src="img/imagen-slider-tour7.jpg">
							</div>
							<div class="texto-slider-tour">
								<h4>City By Night</h4>
								<!-- <h5>CUSCO INOLVIDABLE &nbsp;&nbsp;&nbsp;&nbsp; 04 Días / 03 Noches</h5> -->
								<p>Recorreremos la ciudad de noche , conociendo y admirando su belleza arquitectónica, en especial el centro histórico y sus alrededores, para a posterior ingresar al Circuito Mágico del Agua, en el Parque de la Reserva, donde podremos apreciar la gran variedad de fuentes de agua, y el espectáculo de proyección laser.<br><br>

								<span>DURACIÓN:</span><br><br>
								03 a 03 1/2 horas <br><br>

								<span>INCLUYE:</span><br><br>
								Transporte Turístico, Guía Oficial de Turismo, Tickets de ingreso.<br><br>

								<span>Para cualquier información comunicarse a :<br> 
								K´anchay Peru S.A.C.<br>
								Tlf : <a href="tel: 051976348191" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">051 976 348 191</a><br>
								Correo: <a href="mailto:informes@kanchay.com">informes@kanchay.com</a></span></p>

								<a class="boton-paquete" href="city-by-night.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Ver más</a>

								<div class="clear"></div>
							</div>
							<div class="clear"></div>

							<a href="tours.php">
							<div class="boton-ver-todos">
								<p>Ver Todos</p>
							</div>
							</a>
						</div>
					</section>
				</div>
			</div>
			<div id="btn-prev-paquetes">
				<img src="img/regresar-blanco.png">
			</div>
			<div id="btn-next-paquetes">
				<img src="img/avanzar-blanco.png">
			</div>
			<script src="js/slider-paquetes.js"></script>
		</div>
	</div>

	<div class="contenedor-info" id="peru-info">
		<div class="info">
			<div class="titulo-info"><img src="img/info-kanchay-peru.png"><h2>PERÚ INFO</h2></div>
			<div class="izquierda-info">
				<p>
					<a href="cultura.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Cultura</a><br>
					<a href="fiesta-peru.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Fiesta Perú</a><br>
					<a href="gastronomia.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Gastronomía</a><br>
					<a href="danzas.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Danzas</a><br>
				</p>
			</div>
			<div class="derecha-info">
				<img src="img/computadora.png">
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="contenedor-galeria" id="galeria">
		<div class="titulo-galeria"><img src="img/galeria-kanchay-peru.png"><h2>GALERÍA</h2></div>
		<div class="izquierda-galeria">
			<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original.</p>
			<img src="img/turistas-foto.png">
		</div>
		<div class="derecha-galeria">
			<a href="img/imagen-galeria1.jpg" data-lightbox="example-set"><img src="img/imagen1-kanchay-peru.jpg"></a>
			<a href="img/imagen-galeria2.jpg" data-lightbox="example-set"><img src="img/imagen2-kanchay-peru.jpg"></a>
			<a href="img/imagen-galeria3.jpg" data-lightbox="example-set"><img src="img/imagen3-kanchay-peru.jpg"></a>
			<a href="img/imagen-galeria4.jpg" data-lightbox="example-set"><img src="img/imagen4-kanchay-peru.jpg"></a>
			<a href="img/imagen-galeria5.jpg" data-lightbox="example-set"><img src="img/imagen5-kanchay-peru.jpg"></a>
			<a href="img/imagen-galeria6.jpg" data-lightbox="example-set"><img src="img/imagen6-kanchay-peru.jpg"></a>
			<script src="js/lightbox-plus-jquery.min.js"></script>

			<a class="boton-ver-mas" href="galeria.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <strong>Ver más</strong></a>
		</div>
		<div class="clear"></div>
	</div>

	<!-- <div class="contenedor-testimonios" id="testimonios">
		<div class="titulo-testimonios"><img src="img/testimonios-kanchay-peru.png"><h2>TESTIMONIOS</h2></div>
		<div class="testimonios">
			<div class="testimonio-persona testimonio-personas-espacio">
				<div class="foto"><img src="img/foto1-testimonio.jpg"></div>
				<div class="texto">
					<h3>YERSON LOPEZ</h3>
					<p>Facebook</p>
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original.</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="testimonio-persona">
				<div class="foto"><img src="img/foto2-testimonio.jpg"></div>
				<div class="texto">
					<h3>AMERICO BARRIAL</h3>
					<p>Twitter</p>
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original.</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="testimonio-persona testimonio-personas-espacio">
				<div class="foto"><img src="img/foto3-testimonio.jpg"></div>
				<div class="texto">
					<h3>SOPHIA DO SANTOS</h3>
					<p>Facebook</p>
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original.</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="testimonio-persona">
				<div class="foto"><img src="img/foto4-testimonio.jpg"></div>
				<div class="texto">
					<h3>JOSE MIRANDA</h3>
					<p>Twitter</p>
					<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original.</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
	</div>

	<div class="contenedor-promociones" id="promociones">
		<div class="titulo-promociones"><img src="img/promociones-kanchay-peru.png"><h2>PROMOCIONES</h2></div>
		<div class="promociones">
			<div class="izquierda-promociones">
				<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original. </p>
				<div class="destinos">
					<h2>CUZCO CIUDAD</h2>
					<div class="imagen-destinos"><img src="img/cuzco-ciudad.jpg"></div>
					<div class="texto-destinos">
						<p>Actividades</p>
						<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original.</p>
						<a href="">Ver más</a>
					</div>

					<div class="clear"></div>
				</div>

				<div class="destinos">
					<h2>VALLE SAGRADO</h2>
					<div class="imagen-destinos"><img src="img/valle-sagrado.jpg"></div>
					<div class="texto-destinos">
						<p>Actividades</p>
						<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, esencialmente igual al original.</p>
						<a href="">Ver más</a>
					</div>

					<div class="clear"></div>
				</div>
			</div>
			<div class="derecha-promociones"><img src="img/cartel-promociones.png"></div>

			<div class="clear"></div>
		</div>
	</div> -->

	<div class="contenedor-guias">
		<div class="titulo-guias"><img src="img/guias-oficiales.png"><h2>COLABORADORES DE LA EMPRESA</h2></div>

		<div class="centrado-guias">
			<div class="guia izq">
				<img src="img/milagros.png">
				<div class="texto-guia">
					<h3>Milagros Vargas Cavero</h3>
					<h5>Guía Oficial de Turismo</h5>

					<p>Idiomas:<br>
					<span>Inglés / Italiano</span><br>
					Tour Leading:<br>
					<span>Paracas - Nazca</span>
					</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="guia der">
				<img src="img/erika.png">
				<div class="texto-guia">
					<h3>Erika Mio Vicente</h3>
					<h5>Guía Oficial de Turismo</h5>

					<p>Idiomas:<br>
					<span>Inglés</span><br>
					Tour Leading:<br>
					<span>Paracas - Nazca - Arequipa - Cuzco</span>
					</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="guia izq">
				<img src="img/antonella.png">
				<div class="texto-guia">
				<h3>Antonella Ruitón Zandiga</h3>
				<h5>Guía Oficial de Turismo</h5>

				<p>Idiomas:<br>
				<span>Inglés</span><br>
				Tour Leading:<br>
				<span>Paracas - Nazca</span>
				</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="guia der">
				<img src="img/marvin.png">
				<div class="texto-guia">
				<h3>Marvín Abanto Reyes</h3>
				<h5>Guía Oficial de Turismo</h5>

				<p>Idiomas:<br>
				<span>Inglés</span><br>
				Tour Leading:<br>
				<span>Paracas - Nazca - Arequipa - Puno - Cuzco</span>
				</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="guia izq">
				<img src="img/renato.png">
				<div class="texto-guia">
				<h3>Renato Chavarría Dulanto</h3>
				<h5>Guía Oficial de Turismo</h5>

				<p>Idiomas:<br>
				<span>Inglés</span><br>
				Tour Leading:<br>
				<span>Paracas - Nazca - Arequipa - Puno - Cuzco</span>
				</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="guia der">
				<img src="img/jesus.png">
				<div class="texto-guia">
				<h3>Jesús Torres Cabrera</h3>
				<h5>Guía Oficial de Turismo</h5>

				<p>Idiomas:<br>
				<span>Italiano</span><br>
				Tour Leading:<br>
				<span>Paracas - Nazca -Arequipa - Puno - Cuzco</span>
				</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="clear"></div>
		</div>
	</div>

	<?php
		include 'redes-sociales-flotantes.php';
	?>

	<?php
	include 'contacto.php';
	?>

	<?php
	include 'pie-pagina.php';
	?>
</body>

</html>