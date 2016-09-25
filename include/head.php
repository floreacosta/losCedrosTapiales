<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<meta name="expires" content="-1"/>
	<meta name="description" content="" />
	<meta name="author" content="Florencia Acosta - Graphic Designer & Front End Developer | Fernando Prado - Back End Developer & Data Base Management" />
	<meta name="keywords" content=""/>

	<title>Clínica Los Cedros de Tapiales S.A.</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="font/modernpictogram/modernpictogram.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="css/style.css" media="screen, projection" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/query.js"></script>

	<script type="text/javascript">
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
			})
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
			})
		}

		$(document).ready(openVideo);
		function openVideo(){
			$('#button-video-open').click(function(){
				$( "#video-container" ).addClass("video-open");
			})
		}


		$(document).ready(closeVideo);
		function closeVideo(){
			$('#button-video-close').click(function(){
				$( "#video-container" ).removeClass("video-open");

				var v = document.getElementsByTagName("video")[1];
				v.pause();
				v.load();
			})
		}

		$(document).ready(closeVideoContainer);
		function closeVideoContainer(){
			$('#video-container').click(function(){
				$( "#video-container" ).removeClass("video-open");

				var v = document.getElementsByTagName("video")[1];
				v.pause();
				v.load();
			})
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

		$(document).ready(modalEspecialidades);
		function modalEspecialidades(){
			$("#element-list").click(function(e){
				var href = e.target;
				href = href.toString().split("#");
				
				elemento = "#" + href[1];
				$(elemento).addClass("show");
			});

			$('#button-close-information').click(function(){
				$(elemento).removeClass("show");
			})

			$(".modal").click(function(){
				$(elemento).removeClass("show");
			})
		}

	</script>
</head>
