<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl1eZ_cCxoh4jm8J6oLzEZOUyTsQSS-7Y&callback=initMap"></script>
<script>
	function initMap () {
	  // Create a map object and specify the DOM element for display.
	  var ubicacionLosCedros = {
	    lat: -34.6994319,
	    lng: -58.5061351
	  };

	  var map = new google.maps.Map(document.getElementById('google-map-container'), {
	    center: ubicacionLosCedros,
	    scrollwheel: true,
	    zoom: 17,
	    zoomControl: true
	  });

	  // This event listener calls addMarker() when the map is clicked.
	  google.maps.event.addListener(map, 'click', function (e) {
	    addMarker(e.latLng, map);
	  });

	  // Add a marker at the center of the map.
	  addMarker(ubicacionLosCedros, map);

	  // Adds a marker to the map.
	  function addMarker (ubicacionLosCedros, map) {
	    // Add the marker at the clicked location, and add the next-available label
	    // from the array of alphabetical characters.
	    var image = 'img/icon_map.png';
	    var marker = new google.maps.Marker({
	      map: map,
	      draggable: true,
	      animation: google.maps.Animation.DROP,
	      position: ubicacionLosCedros,
	      title: 'Sanatorio Privado Madero',
	      icon: image
	    });

	    marker.addListener('click', function () {
	      if (marker.getAnimation() !== null) {
	        marker.setAnimation(null);
	      } else {
	        marker.setAnimation(google.maps.Animation.BOUNCE);
	      }
	    });
	  }
	}
</script>

<body>
	<main class="home-page">
		<section class="section-primary" id="section-primary">
      <div class="home-background-video">
        <video loop muted autoplay id="video-background" class="home-background-video-content">
					<? include 'includes/video/video.php' ?>
  			</video>
      </div>

      <div class="title-information">
        <h1 class="global-title-information"><strong>Sanatorio Privado</strong><br/>Madero</h1>
				<div class="global-information-container">
					<p><i>Sanatorio Privado Madero</i> constituye una institución sólida desde el año 1983 en la que se destaca por la excelencia que otorga en sus prestaciones médicas y que sigue manteniendo la filosofía de brindar atención al mejor nivel.</p>
	        <p>La confianza lograda nos permitió ir creciendo junto con las familias de nuestros pacientes.</p>
				</div>
        <button class="open-overlay button-open-home-video" id="institutional_video_button" title="Video a pantalla completa">Video<i class="play-icon-container" aria-hidden="true">Play</i></button>
      </div>
		</section>

		<article class="article-sections-item">
			<figure class="article-item-content">
				<a href="<?= base_url(); ?>instalacion" title="Ver más">
					<img src="<?= base_url(); ?>img/thumbs-instalaciones.jpg" alt="Instalaciones y Equipamiento" />
					<figcaption class="article-item-description">
						<h3>Instalaciones y Equipamiento</h3>
						<p>Brindamos infraestructura e instalaciones para que profesionales atiendan sus pacientes en un ambiente confortable y adecuado.</p>
						<i class="icon-more-info">+</i>
					</figcaption>
				</a>
			</figure>

			<figure class="article-item-content">
				<a href="<?= base_url(); ?>especialidad" title="Ver más">
					<img src="<?= base_url(); ?>img/thumbs-laboratorio.jpg" alt="Especialidades"/>
					<figcaption class="article-item-description">
						<h3>Especialidades</h3>
						<p>Contamos con un abanico de especialidades detalladas según sus días, horarios y profesionales médicos.</p>
						<i class="icon-more-info">+</i>
					</figcaption>
				</a>
			</figure>

			<figure class="article-item-content">
				<a href="<?= base_url(); ?>coberturamedica" title="Ver más">
					<img src="<?= base_url(); ?>img/thumbs-cobertura-medica.jpg" alt="Coberturas Médicas"/>
					<figcaption class="article-item-description">
						<h3>Coberturas Médicas</h3>
						<p>Nuestra administración establece el nexo con las Coberturas Médicas y Obras Sociales a fin de brindar para sus afiliados el acceso a una atención médica calificada según sus necesidades.</p>
						<i class="icon-more-info">+</i>
					</figcaption>
				</a>
			</figure>

			<figure class="article-item-content">
				<a href="<?= base_url(); ?>servicio" title="Ver más">
					<img src="<?= base_url(); ?>img/thumbs-medicina-preventiva.jpg" alt="Medicina Preventiva"/>
					<figcaption class="article-item-description">
						<h3>Servicios Prestados</h3>
						<p>Contamos con el asesoramiento preventivo por parte de profesionales capacitados para dar la mejor atención a sus pacientes.</p>
						<i class="icon-more-info">+</i>
					</figcaption>
				</a>
			</figure>
		</article>

		<section class="all-accordion-container most-important-data-container">
			<? include 'includes/accordion/most-important-data.php' ?>
		</section>

		<section class="patient-responsabilities-container">
			<? include 'includes/patient-responsabilities/patient-responsabilities.php' ?>
		</section>

		<section class="section-secondary" id="section-secondary">
			<img id="imagen-background" src="<?= base_url(); ?>img/recepcion.jpg" alt="Recepción"/>
		</section>

		<article class="article-information-for-user">
			<div class="telephone-line">
				<div class="schedule-information-container" id="schedule">
					<? include 'includes/accordion/horarios-visita.php' ?>
				</div>

				<div class="contact-information-container line-phone" id="address">
					<h3 class="contact-information-title">Ubicación</h3>
					<p class="contact-information-content">Domingo Millan 20, Villa Madero - Cp.: 1688</p>
				</div>

				<div class="contact-information-container line-phone" id="contact">
					<h3 class="contact-information-title">Líneas rotativas</h3>
					<p class="contact-information-content">
						(011) 4622-8188 / (011) 4622-8199
						<br/>
						(011) 4622-8203 / (011) 4622-8209
					</p>
				</div>
			</div>

			<div class="location-google-map location" id="google-map-container"></div>
		</article>

		<? include 'includes/video/modal-video.php' ?>
	</main>
