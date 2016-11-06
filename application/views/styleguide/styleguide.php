<body>
	<main class="styleguides">
		<h1>Markup and Style Guide</h1>
		<h2>Clínica Los Cedros de Tapiales S.A.</h2>
		<p>
			Graphic Design & Front End Developer: <span>Florencia Acosta</span>
			<br/>
			Back End Developer & Data Base Management: <span>Fernando Prado</span>
		</p>

		<section>
			<p>1. Header Global</p>

			<header>
				<div class="logo">
					<a href="#"><img src="<?= base_url(); ?>img/logo.png" title="Clínica Los Cedros de Tapiales S.A."/></a>
				</div>

				<nav class="menu">
					<div class="button-menu">
						<button class="toggle">
							<hr/>
							<hr/>
							<hr/>
						</button>
					</div>
					<div class="menu-element">
						<ul id="element">
							<li><a class="active" href="#" title="Instalaciones">Instalaciones</a></li>
							<li><a href="#" title="Especialidades">Especialidades</a></li>
							<li><a href="#" title="Coberturas Médicas">Coberturas</a></li>
							<li><a href="#" title="Medicina Preventiva">Medicina Preventiva</a></li>
						</ul>
					</div>
				</nav>
			</header>
		</section>

		<section>
			<p>2. Footer Global</p>

			<footer>
				<div class="col-4 institutional">
					<div class="logo">
						<a href="#"><img src="<?= base_url(); ?>img/logo.png" title="Clínica Los Cedros de Tapiales S.A."/></a>
					</div>
					<p>
						Todos los derechos reservados.
						<br/>
						Politica de Privacidad del Sitio.
						<br/>
						Términos y Condiciones.
					</p>
				</div>

				<div class="col-4 site-map">
					<ul>
						<h3>Institucional</h3>
						<li><a href="">Home</a></li>
						<li><a href="">Instalaciones</a></li>
						<li><a href="">Especialidades</a></li>
						<li><a href="">Coberturas</a></li>
						<li><a href="">Medicina Preventiva</a></li>
					</ul>
				</div>

				<div class="col-4 information">
					<div class="turn-online">
						<h3>Turnos On-line</h3>
						<span>|  Click <a href="">aquí</a> para continuar</span>
					</div>

					<div class="line-phone">
						<h3>Líneas rotativas</h3>
						<span>
							(011) 4622-8188 / (011) 4622-8199
							<br/>
							(011) 4622-8203 / (011) 4622-8209
						</span>
					</div>
				</div>

				<div class="col-4 search">
					<label class="common-input">
						<input type="text" placeholder="Buscar..." value="" name="search"/>
						<button type="submit" value=""></button>
					</label>
				</div>
			</footer>
		</section>

		<section>
			<p>3. Extra information</p>
			<article class="extra-information">
				<span>2016 | Design and Developer by <a href="#">Acosta Prado</a></span>
				<span>Clinica Los Cedros de Tapiales S.A.</span>
			</article>
		</section>

		<section>
			<p>4. Tooltip</p>
			<nav class="tooltip-box">
				<a href="online-turn" class="tooltip tooltip-active">
					<span class="tooltip-text tooltip-text-primary">Turnos online</span>
				</a>
				<a href="address" class="tooltip">
					<span class="tooltip-text">Ubicación</span>
				</a>
				<a href="contact" class="tooltip">
					<span class="tooltip-text">Contacto</span>
				</div>
				<a href="schedule" class="tooltip">
					<span class="tooltip-text">Horarios</span>
				</a>
			</nav>
		</section>

		<section>
			<p>5. Tooltips visibles</p>
			<div class="container">
				<div class="box-description flecha-left">
					<p>Área de urgencias y emergencias con 9 shock-rooms equipados con complejidad de cuidados críticos.</p>
				</div>
				<div class="box-description flecha-top">
					<p>Área de urgencias y emergencias con 9 shock-rooms equipados con complejidad de cuidados críticos.</p>
				</div>
				<div class="box-description flecha-bottom">
					<p>Área de urgencias y emergencias con 9 shock-rooms equipados con complejidad de cuidados críticos.</p>
				</div>
				<div class="box-description flecha-right">
					<p>Área de urgencias y emergencias con 9 shock-rooms equipados con complejidad de cuidados críticos.</p>
				</div>
			</div>
		</section>

		<section>
			<p>6. Items Box</p>
			<ul class="element-list">
				<div>
					<h3>C</h3>
					<li class="information-item"><a href="#">Cirugía Infantil</a></li>
					<li class="information-item"><a href="#">Cardiología Adultos</a></li>
					<li class="information-item"><a href="#">Cardiología Infantil</a></li>
					<li class="information-item"><a href="#">Cirugía Adultos</a></li>
					<li class="information-item"><a href="#">Cardiología Infantil</a></li>
					<li class="information-item"><a href="#">Cirugía Plástica (niños y adultos)</a></li>
					<li class="information-item"><a href="#">Clínica Médica Adultos</a></li>
				</div>
			</ul>
		</section>

		<section>
			<p>7. Modal</p>
			<div class="container">
				<article class="modal">
					<div class="modal-container">
						<button title="Cerrar"></button>
						<h2>Cirugía Infantil</h2>
						<ul>
							<li class="col-3">
								<h4>Dr. Alejandro Rizk</h4>
								<p>Martes de 14.00 a 15.00 hs.</p>
								<p>Viernes de 16.00 a 17.00 hs</p>
							</li>
							<li class="col-3">
								<h4>Dr. Alejandro Rizk</h4>
								<p>Martes de 14.00 a 15.00 hs.</p>
								<p>Viernes de 16.00 a 17.00 hs</p>
							</li>
							<li class="col-3">
								<h4>Dr. Alejandro Rizk</h4>
								<p>Martes de 14.00 a 15.00 hs.</p>
								<p>Viernes de 16.00 a 17.00 hs</p>
							</li>
						</ul>
					</div>
				</article>
			</div>
		</section>

		<section>
			<p>8. Modal Video</p>
			<article class="modal-video">
				<div class="modal-container-video">
					<button title="Close"></button>
					<video controls>
						<source src="<?= base_url(); ?>video/losCedros.webm" type='video/webm; codecs="vp8, vorbis"' />
						<source src="<?= base_url(); ?>video/losCedros.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
						<source src="<?= base_url(); ?>video/losCedros.ogv" type='video/ogg; codecs="theora, vorbis"' />
					</video>
				</div>
			</article>
		</section>

		<section>
			<p>9. Títulares de sección</p>
			<h1>Especialidades</h1>
		</section>

		<section>
			<p>10. Breadcrum</p>
			<div class="box-container-breadcrum">
				<span><a href="">Home</a></span>
				<span><a href="">Segunda vista</a></span>
				<span><a class="active" href="">Especialidades</a></span>
			</div>
		</section>

		<section>
			<p>11. Heading level</p>
			<h1>Title level 1</h1>
			<h2>Title level 2</h2>
			<h3>Title level 3</h3>

			<div class="col-paragraph">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat leo id erat cursus, id congue leo maximus. Fusce sodales suscipit sem, ac imperdiet magna venenatis non. Aliquam erat volutpat. Suspendisse nec urna laoreet, hendrerit lorem quis, porta lorem. Nulla sed mi lorem.</p>
			</div>
		</section>

		<section>
			<p>12. Item information</p>
			<div class="prevention-item">
				<h2>Asesoramiento y supervisión por médicos</h2>
				<p>Permanentemente en los horarios de atención de CEPEM hay profesionales médicos capacitados para responder y solucionar en forma personal o telefónica todas las inquietudes o problemas que puedan surgir en relación o como consecuencia de la vacunación.</p>
			</div>
			<div class="prevention-item">
				<h2>Asesoramiento y supervisión por médicos</h2>
				<p>Permanentemente en los horarios de atención de CEPEM hay profesionales médicos capacitados para responder y solucionar en forma personal o telefónica todas las inquietudes o problemas que puedan surgir en relación o como consecuencia de la vacunación.</p>
			</div>
			<div class="prevention-item">
				<h2>Asesoramiento y supervisión por médicos</h2>
				<p>Permanentemente en los horarios de atención de CEPEM hay profesionales médicos capacitados para responder y solucionar en forma personal o telefónica todas las inquietudes o problemas que puedan surgir en relación o como consecuencia de la vacunación.</p>
			</div>
		</section>

		<section>
			<p>13. Slider</p>

			<div class="container-slider">

				<button class="button-prev" id="button-prev" title="Anterior" onClick="buttonPrev()"></button>
				<button class="button-next" id="button-next" title="Siguiente" onClick="buttonNext()"></button>

				<figure class="image-primary">

					<div id="image1" class="content-image-primary">
						<img alt="" src="<?= base_url(); ?>img/1.jpg"/>
						<figcaption class="image-description">Descripción de la imagen 1</figcaption>
					</div>

					<div class="content-image-primary">
						<img alt="" src="<?= base_url(); ?>img/2.jpg"/>
						<figcaption class="image-description">Descripción de la imagen 2</figcaption>
					</div>

					<div class="content-image-primary">
						<img alt="" src="<?= base_url(); ?>img/3.jpg"/>
						<figcaption class="image-description">Descripción de la imagen 3</figcaption>
					</div>

					<div class="content-image-primary">
						<img alt="" src="<?= base_url(); ?>img/4.jpg"/>
						<figcaption class="image-description">Descripción de la imagen 4</figcaption>
					</div>

					<div class="content-image-primary">
						<img alt="" src="<?= base_url(); ?>img/5.jpg"/>
						<figcaption class="image-description">Descripción de la imagen 5</figcaption>
					</div>

					<div class="content-image-primary">
						<img alt="" src="<?= base_url(); ?>img/6.jpg"/>
						<figcaption class="image-description">Descripción de la imagen 6</figcaption>
					</div>

				</figure>

				<div class="container-image-seconodary" onClick="slider()">
					<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/2.jpg"/></a>
					<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/3.jpg"/></a>
					<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/4.jpg"/></a>
					<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/5.jpg"/></a>
					<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/6.jpg"/></a>
				</div>
			</div>
		</section>

	</main>
</body>
</html>
