$(document).ready(function() {
	var URLactual = window.location.pathname;

	switch(URLactual) {
		case '/losCedrosTapiales/institucional.php':
			$( "#instalaciones" ).addClass("active");
			$( "#servicios" ).remove("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/servicios.php':
			$( "#instalaciones" ).remove("active");
			$( "#servicios" ).addClass("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/cobertura-medica.php':
			$( "#instalaciones" ).remove("active");
			$( "#servicios" ).remove("active");
			$( "#coberturas" ).addClass("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/especialidades.php':
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