$(document).ready(function() {
	var URLactual = window.location.pathname;

	switch(URLactual) {
		case '/losCedrosTapiales/institucional.php':
			$( "#instalaciones" ).addClass("active");
			$( "#medicina-preventiva" ).remove("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/medicina-preventiva.php':
			$( "#instalaciones" ).remove("active");
			$( "#medicina-preventiva" ).addClass("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/coberturas-medicas.php':
			$( "#instalaciones" ).remove("active");
			$( "#medicina-preventiva" ).remove("active");
			$( "#coberturas" ).addClass("active");
			$( "#especialidades" ).remove("active");
		break;
		case '/losCedrosTapiales/especialidades.php':
			$( "#instalaciones" ).remove("active");
			$( "#medicina-preventiva" ).remove("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).addClass("active");
		default:
			$( "#instalaciones" ).remove("active");
			$( "#medicina-preventiva" ).remove("active");
			$( "#coberturas" ).remove("active");
			$( "#especialidades" ).remove("active");
		break;
	}
});