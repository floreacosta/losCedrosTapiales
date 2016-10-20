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
        var h = document.getElementById('informationBox');
        if (h != "NULL") {
                h = h.offsetHeight + "px";
                document.getElementById('map').style.height = h;
        }

        $(window).resize(function() {
                h = document.getElementById('informationBox');
                if (h != "NULL") {
                        h = h.offsetHeight + "px";
                        document.getElementById('map').style.height = h;
                }
        });
}

$(document).ready(heightSection);
function heightSection() {
        var ventana = $(window).width();
        var h = document.getElementById('video-background');
        if((ventana > 0) && (ventana < 500)) {
                $('#section-primary').css('height', 'auto');
        } else if ((ventana >= 500) && (ventana <= 1024)){
                if (h != "NULL") {
                        h = h.offsetHeight + "px";
                        document.getElementById('section-primary').style.height = h;
                }
        } else {
                $('#section-primary').css('height', '500px');
        }


        $(window).resize(function() {
                var ventana = $(window).width();
                var h = document.getElementById('video-background');
                if((ventana > 0) && (ventana < 500)) {
                        $('#section-primary').css('height', 'auto');
                } else if ((ventana >= 500) && (ventana <= 1024)){
                        if (h != "NULL") {
                                h = h.offsetHeight + "px";
                                document.getElementById('section-primary').style.height = h;
                        }
                } else {
                        $('#section-primary').css('height', '500px');
                }
        });
}

$(document).ready(heightSectionSecondary);
function heightSectionSecondary() {
        var ventana = $(window).width();
        var h = document.getElementById('imagen-background');
        if(ventana < 1024) {
                if (h != "NULL") {
                        h = h.offsetHeight + "px";
                        document.getElementById('section-secondary').style.height = h;
                }
        } else {
                $('#section-secondary').css('height', '500px');
        }

        $(window).resize(function() {
                var ventana = $(window).width();
                var h = document.getElementById('imagen-background');
                if(ventana < 1024) {
                        if (h != "NULL") {
                                h = h.offsetHeight + "px";
                                document.getElementById('section-secondary').style.height = h;
                        }
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
