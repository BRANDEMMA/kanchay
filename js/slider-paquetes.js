//======== ALMACENANDO VARIABLES (SLIDER Y BOTONES) ==========//

var slider2 = $('#slider-paquetes');
var avanzar2 = $('#btn-next-paquetes');
var retroceder2 = $('#btn-prev-paquetes');

//===========  INSERTANDO LA ULTIMA IMAGEN DEL SLIDER AL PRINCIPIO DEL RECORRIDO  ===========//
$('#slider-paquetes section:last').insertBefore('#slider-paquetes section:first');

//===== 	MOVIENDO EL MARGEN PARA VER LA PRIMERA IMAGEN    ==============//
slider2.css('margin-left', '-'+100+'%');

//========	PROGRAMANDO EL BOTON DE AVANZAR   ===========//
function moverD2(){
	slider2.animate({marginLeft:'-'+200+'%'},700, function(){
		//==  INSERTANDO LA PRIMERA IMAGEN DEL SLIDER AL FINAL DEL RECORRIDO  ==//
		$('#slider-paquetes section:first').insertAfter('#slider-paquetes section:last');
		//=== MOVIENDO EL MARGEN PARA VER LA IMAGEN CORRECTA//
		slider2.css('margin-left', '-'+100+'%');
	});
}

//========	PROGRAMANDO EL BOTON DE REGRESAR   ===========//
function moverI2(){
	slider2.animate({marginLeft:0},700, function(){
		//==  INSERTANDO LA ULTIMA IMAGEN DEL SLIDER AL INICIO DEL RECORRIDO  ==//
		$('#slider-paquetes section:last').insertBefore('#slider-paquetes section:first');
		//=== MOVIENDO EL MARGEN PARA VER LA IMAGEN CORRECTA//
		slider2.css('margin-left', '-'+100+'%');
	});
}

//=== ACTIVANDO BOTON DE AVANZAR ===//
avanzar2.on('click',function(){
	moverD2();
});

//=== ACTIVANDO BOTON DE RETROCEDER ===//
retroceder2.on('click', function(){
	moverI2();
});

// //====  AUTOPLAY SLIDER ====//
// function autoplay2(){
// 	interval = setInterval(function(){
// 		moverD2();
// 	}, 5000);
// }

// autoplay2();