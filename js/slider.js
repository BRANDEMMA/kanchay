//======== ALMACENANDO VARIABLES (SLIDER Y BOTONES) ==========//

var slider = $('#slider');
var avanzar = $('#btn-next');
var retroceder = $('#btn-prev');

//===========  INSERTANDO LA ULTIMA IMAGEN DEL SLIDER AL PRINCIPIO DEL RECORRIDO  ===========//
$('#slider section:last').insertBefore('#slider section:first');

//===== 	MOVIENDO EL MARGEN PARA VER LA PRIMERA IMAGEN    ==============//
slider.css('margin-left', '-'+100+'%');

//========	PROGRAMANDO EL BOTON DE AVANZAR   ===========//
function moverD(){
	slider.animate({marginLeft:'-'+200+'%'},700, function(){
		//==  INSERTANDO LA PRIMERA IMAGEN DEL SLIDER AL FINAL DEL RECORRIDO  ==//
		$('#slider section:first').insertAfter('#slider section:last');
		//=== MOVIENDO EL MARGEN PARA VER LA IMAGEN CORRECTA//
		slider.css('margin-left', '-'+100+'%');
	});
}

//========	PROGRAMANDO EL BOTON DE REGRESAR   ===========//
function moverI(){
	slider.animate({marginLeft:0},700, function(){
		//==  INSERTANDO LA ULTIMA IMAGEN DEL SLIDER AL INICIO DEL RECORRIDO  ==//
		$('#slider section:last').insertBefore('#slider section:first');
		//=== MOVIENDO EL MARGEN PARA VER LA IMAGEN CORRECTA//
		slider.css('margin-left', '-'+100+'%');
	});
}

//=== ACTIVANDO BOTON DE AVANZAR ===//
avanzar.on('click',function(){
	moverD();
});

//=== ACTIVANDO BOTON DE RETROCEDER ===//
retroceder.on('click', function(){
	moverI();
});

//====  AUTOPLAY SLIDER ====//
function autoplay(){
	interval = setInterval(function(){
		moverD();
	}, 5000);
}

autoplay();