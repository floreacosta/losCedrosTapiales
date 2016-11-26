$(document).ready(function() {
	var URLactual = window.location.pathname;

	switch(URLactual) {
		case '/losCedrosTapiales/institucional':
			$( "#instalaciones" ).addClass("active");
			$( "#servicios" ).remove("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/servicios':
			$( "#instalaciones" ).remove("active");
			$( "#servicios" ).addClass("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/coberturamedica':
			$( "#instalaciones" ).remove("active");
			$( "#servicios" ).remove("active");
			$( "#coberturas" ).addClass("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/especialidades':
			$( "#instalaciones" ).remove("active");
			$( "#servicios" ).remove("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).addClass("active");
		default:
			$( "#instalaciones" ).remove("active");
			$( "#servicios" ).remove("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
	}
});

$(document).ready(menu);
var contador = 1;
function menu(){
   $('.toggle').click(function(){
	      if(contador == 1){

              $('#element').animate({
                      right: '0em'
              });

              $('.menu-element').css("height", "328px");

              contador = 0;
	      } else {
              contador = 1;

              $('#element').animate({
                      right: '-100%'
              });

              $('.menu-element').css("height", "auto");
	      }
   });
}

$(document).ready(fixedMenu);
function fixedMenu() {
        $( window ).resize(function(){
                var ventana = $(window).width();
                var	right = $('#element').css('right');
                var	pat = 'px';

                right = right.replace(pat, '');
                right = parseInt(right);

                if((ventana > 1024) && (right < -1024)) {
                        $('#element').css('right', '2em');
                }
        });
}

$(document).ready(openVideo);
function openVideo(){
        $('#button-video-open').click(function(){
                $( "#video-container" ).addClass("video-open");
        });
}


$(document).ready(closeVideo);
function closeVideo(){
        $('#button-video-close').click(function(){
                $( "#video-container" ).removeClass("video-open");

                var v = document.getElementsByTagName("video")[1];
                v.pause();
                v.load();
        });
}

$(document).ready(closeVideoContainer);
function closeVideoContainer(){
        $('#video-container').click(function(){
                $( "#video-container" ).removeClass("video-open");

                var v = document.getElementsByTagName("video")[1];
                v.pause();
                v.load();
        });
}

$(document).ready(heightMap);
function heightMap() {
	var h = $("#informationBox").outerHeight() + "px";
	$("#map").css("height", h);
	$(window).resize(function() {
		var h = $("#informationBox").outerHeight() + "px";
		$("#map").css("height", h);
	});
}

$(document).ready(modalEspecialidades);
function modalEspecialidades() {
	$("#element-list").click(function(e){
		elemento = e.target.id;
		elemento = "#modal" + elemento;
		$(elemento).addClass("show");
	});

	$('#button-close-information').click(function(e){
		 $(elemento).removeClass("show");
	});

	$(".modal").click(function(e){
		$(elemento).removeClass("show");
	});
}

$(document).ready(instalaciones);
function instalaciones() {

	// Función slider
	var sliderFunction = function (slider) {
		/**
		/* Código del listado de imágenes debajo del slider (accesos directos a cada imagen)
		**/

		//Declaro un array donde guardo el listado de imagenes para poder recorrerlo
		var listadoImagenes = [];
		$(slider + " .container-image-secondary a").each(function(index){
			listadoImagenes.push(this);
		});

		//Contador de páginas o imagenes a las que se le dará NEXT
		var page = 1;

		//Capturo el ID de la imagen cliqueada para que se muestre
		//directamente en el slider sin cliquear los botones NEXT y PREV
		$(slider + " .container-image-secondary").click(function(e){
			//Le quito el funcionamiento por defecto al link
			e.preventDefault();

			//Capturo el ID
			var a = e.target.id;

			//Recorro el array de imágenes
			for(var i = 0; i < listadoImagenes.length; i++) {
				//Si "a" (que contiene el ID de la imagen cliqueada) es IGUAL al id de la imagen del ARRAY
				if(a == listadoImagenes[i].id) {
					//Capturo la posición del contenedor
					//Ancho de la imagen * la posición del ARRAY * -1
					//(para hacerlo negativo, por ser necesario para los estilos)
					var posicion = $(slider + " .content-imagen li img").width() * i * -1;
					//Le doy el valor de "posicion" al estilo LEFT
					$(slider + " .content-imagen").css("left", posicion);
					//Le indico al contador general en qué página o imagen estoy ubicada
					//para darle la información a los botones NEXT y PREV
					page = (i + 1);
				}
			}
		});

		var cantImagenes = $(slider + " .content-imagen li").size();
		var anchoLi = (100 / cantImagenes) + "%";

		$(slider + " .content-image-primary").css("width", anchoLi);

		var anchoContenedor = (cantImagenes * 100) + "%";
		$(slider + " .content-imagen").css("width", anchoContenedor);

		var espacioAmover = 0;
		$(slider + " #button-next").click(function(){
			var anchoImagen = $(slider + " .content-imagen li img").width() * -1;
			var tiempoDesliz = cantImagenes * 100;

			if (page == cantImagenes) {
				page = 1;
				$(slider + " .content-imagen").animate({left: "0px"}, tiempoDesliz);
				espacioAmover = 0;
			} else {
				if (espacioAmover == (anchoImagen * page)) {
					espacioAmover = anchoImagen * (page + 1);
				} else {
					espacioAmover = anchoImagen * page;
				}
				page++;
				$(slider + " .content-imagen").animate({left: (espacioAmover + "px")}, tiempoDesliz);
			}

			$(window).resize(function(){
				var anchoImagen = $(slider + " .content-imagen li img").width() * -1;
				var espacioAmover = 0;
				espacioAmover = anchoImagen * (page - 1);
				$(slider + " .content-imagen").css("left", (espacioAmover + "px"));
			});
		});

		$(slider + " #button-prev").click(function(){
			var anchoImagen = $(slider + " .content-imagen li img").width() * -1;
			var tiempoDesliz = cantImagenes * 300;

			if (page <= 1) {
				page = cantImagenes;
				espacioAmover = anchoImagen * (cantImagenes - 1);
				$(slider + " .content-imagen").animate({left: (espacioAmover + "px")}, tiempoDesliz);
			} else {
				page--;
				if (espacioAmover == (anchoImagen * page)) {
					espacioAmover = anchoImagen * (page - 1);
				} else {
					espacioAmover = anchoImagen * page;
				}
				$(slider + " .content-imagen").animate({left: (espacioAmover + "px")}, tiempoDesliz);
			}

			$(window).resize(function(){
				var anchoImagen = $(slider + " .content-imagen li img").width();
				var espacioAmover = 0;
				espacioAmover = anchoImagen * (page - 1);
				$(slider + " .content-imagen").css("left", (espacioAmover + "px"));
			});
		});
	} //funcion slider ();

	//Primer slider, por defecto abierto
	sliderFunction("#slider-1");

	//Ubico el item del listado (menu de sliders) en el que hago click
	$(".menu-instalaciones2 li span").click(function(e){
		var li = e.target.parentNode;
		//Recorro todo el menú y le remuevo la clase ".item-active" a todos
		$(".menu-instalaciones2 li").each(function(){
			$(".menu-instalaciones2 li").removeClass("item-active");
		});
		//Le agrego la clase ".item-active" al que se cliqueó
		$(li).addClass("item-active");

		//Preparo la variable con el ID del slider que corresponde al item cliqueado
		slider = "#slider-" + li.id;
		//Remuevo de todos los slider la clase ".slider-active"
		$(".container-all-slider > div").each(function(){
			$(".container-all-slider > div").removeClass("slider-active");
		});

		//Le agrego la clase ".slider-active" al slider correspondiente al item cliqueado
		$(slider).addClass("slider-active");

		//Hago funcionar el slider con el ID correspondiente al slider en cuestión
		sliderFunction(slider);
	});
}
