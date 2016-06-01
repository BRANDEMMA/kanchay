<?php
?>
	<div class="contenedor-contactenos">
		<div class="contactenos">
			<div class="titulo-contactenos"><img src="img/contactenos-kanchay-peru.png"><h2>CONTÁCTENOS</h2></div>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/contacto.php">
				<div id="ajaxsuccess">*El Email ha sido enviado satisfactoriamente.*</div>
				<div class="izquierda-contactenos">
					<label>Nombre y Apellido:</label>
					<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-nombre">*Por favor introduce tu nombre*</div><br>

					<label>Correo Electronico:</label>
					<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-email">*Por favor introduce tu e-mail*</div>
				    <div class="error" id="err-emailvld">*El formato de E-mail no es valido*</div><br>

				    <label>Empresa:</label>
					<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-empresa">*Por favor introduce el nombre de tu Empresa*</div><br>

					<label>Teléfono:</label>
					<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-telefono">*Por favor introduce tu número teléfonico*</div><br>
					
				</div>
				<div class="derecha-contactenos">
					<label>Comentario:</label>
					<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
					<div class="clear"></div>
					<div class="error" id="err-mensaje">*Por favor escribe un mensaje*</div><br>
					<div class="error" id="err-form">*Hubo un problema al validar el formulario por favor verifica!*</div>
					<div class="error" id="err-timedout">*El tiempo de conexión con el servidor a expirado!*</div>
					<div class="error" id="err-state"></div><br>
					<button id="send" class="btn btn-primary boton-enviar">ENVIAR</button>
				</div>
				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>

		  	<div class="datos-contacto-final">
		  		<div class="datos-final">
		  			<img src="img/ubicacion-blanco.png"><p>Lima, Perú</p>
		  		</div>
		  		<div class="datos-final">
		  			<img src="img/mensaje-blanco.png"><p><a href="">correo@dominio.com</p></a>
		  		</div>
		  		<div class="datos-final">
		  			<img src="img/telefono-blanco.png"><p><a href="">987 654 321</a></p>
		  		</div>
		  	</div>
		</div>
	</div>

<?php
?>