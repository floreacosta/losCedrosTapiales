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

$(document).ready(heightSection);
function heightSection() {
	var ventana = $(window).width();
	var h = $("#video-background").outerHeight() + "px";

	if((ventana > 0) && (ventana < 500)) {
		$('#section-primary').css('height', 'auto');
	} else if ((ventana >= 500) && (ventana <= 1024)){
		$("#section-primary").css("height", h);
	} else {
		$('#section-primary').css('height', '500px');
	}

	$(window).resize(function() {
		if((ventana > 0) && (ventana < 500)) {
			$('#section-primary').css('height', 'auto');
		} else if ((ventana >= 500) && (ventana <= 1024)){
			$("#section-primary").css("height", h);
		} else {
			$('#section-primary').css('height', '500px');
		}
	});
}

$(document).ready(heightSectionSecondary);
function heightSectionSecondary() {
	var ventana = $(window).width();
	var h = $("#imagen-background").outerHeight() + "px";

	if(ventana < 1024) {
		$('#section-secondary').css('height', h);
	} else {
	      $('#section-secondary').css('height', '500px');
	}

	$(window).resize(function() {
	      if(ventana < 1024) {
			 $('#section-secondary').css('height', h);
	      } else {
			 $('#section-secondary').css('height', '500px');
	      }
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

$(document).ready(openDescription);
function openDescription() {
	$(".menu-instalaciones2 li span").click(function(e){
		var li = e.target.parentNode;
		$(".menu-instalaciones2 li").each(function(){
			$(".menu-instalaciones2 li").removeClass("item-active");
		});
		$(li).addClass("item-active");

		slider = "#slider-" + li.id;
		$(".container-all-slider div").each(function(){
			$(".container-all-slider div").removeClass("slider-active");
		});
		$(slider).addClass("slider-active");
	});
}

$(document).ready(slider);
function slider() {
     var cantImagenes = $(".slider-active .content-imagen li").size();
     var anchoContenedor = (cantImagenes * 100) + "%";
     $(".slider-active .content-imagen").css("width", anchoContenedor);

     var page = 1;
     $("#button-next").click(function(){

          var anchoImagen = $(".content-imagen li img").width() * -1;
          if (page >= cantImagenes) {
               page = 1;
               $(".slider-active .content-imagen").animate({left: "0px"}, 500);
          } else {
               espacioAmover = anchoImagen * page;
               $(".slider-active .content-imagen").animate({left: (espacioAmover + "px")}, 500);
               page++;
          }

          $(window).resize(function(){
               var anchoImagen = $(".slider-active .content-imagen li img").width() * -1;
               espacioAmover = anchoImagen * (page - 1);
               $(".slider-active .content-imagen").css("left", (espacioAmover + "px"));
          });
     });

     $("#button-prev").click(function(){
          //page = 1;
          var anchoImagen = $(".content-imagen li img").width() * -1;
          if (page < 1) {
               page = cantImagenes;
               espacioAmover = anchoImagen * (cantImagenes - 1);
               $(".content-imagen").animate({left: (espacioAmover + "px")}, 500);
               page--;
          } else {
               page--;
               espacioAmover = anchoImagen * page;
               $(".content-imagen").animate({left: (espacioAmover + "px")}, 500);
          }

          $(window).resize(function(){
               var anchoImagen = $(".content-imagen li img").width();
               espacioAmover = anchoImagen * (page - 1);
               $(".content-imagen").css("left", (espacioAmover + "px"));
          });
     });
}
