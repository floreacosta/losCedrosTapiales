<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl1eZ_cCxoh4jm8J6oLzEZOUyTsQSS-7Y&callback=initMap">
</script>

<script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
		var myLatLng = { lat: -34.6994319, lng: -58.5061351 };

		var map = new google.maps.Map(document.getElementById('map'), {
			center: myLatLng,
			scrollwheel: true,
			zoom: 17,
			zoomControl: true
		});

		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Clínica Los Cedros de Tapiales S.A.'
		});
      }
</script>

<body>

	<main class="home">
		<section class="section-primary" id="section-primary">
               <article class="title-information">
                    <h1>
                         <strong>Clínica Los Cedros</strong>
                         <br/>
                         de Tapiales S.A.
                    </h1>
                    <p><i>Clínica Los Cedros</i> constituye una institución sólida desde el año 1983 en la que se destaca por la excelencia que otorga en sus prestaciones médicas y que sigue manteniendo la filosofía de brindar atención al mejor nivel.
                    </p>
                    <p>La confianza lograda nos permitió ir creciendo junto con las familias de nuestros pacientes.</p>

                    <button id="button-video-open" title="Video a pantalla completa">Video</button>
               </article>
			<video loop muted autoplay id="video-background">
				<source src="<?= base_url(); ?>video/losCedros.webm" type='video/webm; codecs="vp8, vorbis"' />
				<source src="<?= base_url(); ?>video/losCedros.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
				<source src="<?= base_url(); ?>video/losCedros.ogv" type='video/ogg; codecs="theora, vorbis"' />
			</video>
			<div id="video-container" class="video-container">
				<button id="button-video-close" onClick="closeVideo()" title="Cerrar video"></button>
				<video controls>
					<source src="<?= base_url(); ?>video/losCedros.webm" type='video/webm; codecs="vp8, vorbis"' />
					<source src="<?= base_url(); ?>video/losCedros.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
					<source src="<?= base_url(); ?>video/losCedros.ogv" type='video/ogg; codecs="theora, vorbis"' />
				</video>
			</div>
		</section>

		<article class="article-sections-item">
			<figure>
				<img src="<?= base_url(); ?>img/thumbs-instalaciones.jpg" alt="Instalaciones y Equipamiento"/>
				<figcaption>
					<h3>Instalaciones y Equipamiento</h3>
					<p>Brindamos infraestructura e instalaciones para que profesionales atiendan sus pacientes en un ambiente confortable y adecuado.</p>
					<a href="<?= base_url(); ?>instalaciones" title="Ver más">+</a>
				</figcaption>
			</figure>

			<figure>
				<img src="<?= base_url(); ?>img/thumbs-laboratorio.jpg" alt="Especialidades"/>
				<figcaption>
					<h3>Especialidades</h3>
					<p>Contamos con un abanico de especialidades detalladas según sus días, horarios y profesionales médicos.</p>
					<a href="<?= base_url(); ?>especialidades" title="Ver más">+</a>
				</figcaption>
			</figure>

			<figure>
				<img src="<?= base_url(); ?>img/thumbs-cobertura-medica.jpg" alt="Coberturas Médicas"/>
				<figcaption>
					<h3>Coberturas Médicas</h3>
					<p>Nuestra administración establece el nexo con las Coberturas Médicas y Obras Sociales a fin de brindar para sus afiliados el acceso a una atención médica calificada según sus necesidades.</p>
					<a href="<?= base_url(); ?>coberturamedica" title="Ver más">+</a>
				</figcaption>
			</figure>

			<figure>
				<img src="<?= base_url(); ?>img/thumbs-medicina-preventiva.jpg" alt="Medicina Preventiva"/>
				<figcaption>
					<h3>Servicios Prestados</h3>
					<p>Contamos con el asesoramiento preventivo por parte de profesionales capacitados para dar la mejor atención a sus pacientes.</p>
					<a href="servicios" title="Ver más">+</a>
				</figcaption>
			</figure>
		</article>

		<article id="turn" class="article-online-turn">
			<div>
				<h1>Solicitud de turnos Online</h1>
				<span>| Click <a href="<?= base_url(); ?>">aquí</a> para continuar</span>
			</div>
		</article>

		<section class="section-secondary" id="section-secondary">
			<img id="imagen-background" src="<?= base_url(); ?>img/recepcion.jpg" alt="Recepción"/>
		</section>

		<article class="article-information-for-user" id="contact">
			<div class="telephone-line" id="informationBox">
				<span>
					<h3>Ubicación</h3>
					<p>Domingo Millan 20, Villa Madero - Cp.: 1688</p>
				</span>
				<span>
					<h3>Horarios</h3>
					<p>
						<span>Para turnos:</span>
						Lunes a Viernes de 8 a 20hs.
					</p>
					<p>
						<span>Urgencias médicas:</span>
						7 días a la semana, las 24hs.
					</p>
				</span>
				<span>
					<a name="contact"></a>
					<h3>Líneas rotativas</h3>
					<p>
						(011) 4622-8188 / (011) 4622-8199
						<br/>
						(011) 4622-8203 / (011) 4622-8209
					</p>
				</span>
			</div>
			<span>Click <a href="https://goo.gl/maps/yPByzy2b1YR2">aquí</a> para ver en Google Maps.</span>
			<div class="location-google-map location" id="map"></div>
		</article>

		<article class="article-visit-schedule" id="visit">
			<h1>Horarios de visita</h1>
			<h2>Internación: <span>15 a 17 h.</span></h2>
			<h2>Unidad de Cuidados Intensivos: <span>12 a 12:30 h. y 18 a 18:30 h.</span></h2>
		</article>
	</main>
