<body>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="<?= base_url(); ?>index">Home</a></span>
			<span><a class="active" href="">Instalaciones</a></span>
		</div>

		<h1>
			Instalaciones
			<br/>
			y Equipamiento técnico
		</h1>
		<div class="col-paragraph">
			<p>Para una mejor atención del paciente contamos con una importante y moderna infraestructura, edificio de 4 plantas totalmente renovados, más de 20 consultorios, 5 sectores de internación, nuevos y amplios quirófanos, nueva sala de parto y pre-parto, ampliación de la unidad de cuidados intensivos y sector de esterilización. Todos ellos cuentan con tecnología de última generación.</p>
		</div>

		<section>
			<ul class="menu-instalaciones2" onClick="instalaciones()">
				<li id="1" class="item-active">
					<span title="Edificio">Edificio</span>
					<div class="item-description">Clínica Los Cedros de tapiales ofrece una infraestructura de de 4 plantas totalmente renovados.<br/>Posee 5 sectores de internación clínica, quirúrgica y de obstetricia.</div>
				</li>
				<li id="2">
					<span title="Sala de espera">Sala de espera</span>
					<div class="item-description">Áreas de internación con amplia iluminación y cómoda accesibilidad para todo tipo de pacientes.</div>
				</li>
				<li id="3">
					<span title="Habitaciones">Habitaciones</span>
					<div class="item-description">Las suites de internación disponen con aire acondicionado, televisión satelital, Wifi y comodidades para acompañantes.</div>
				</li>
				<li id="4">
					<span title="Consultorios">Consultorios</span>
					<div class="item-description">Consultorios equipados con tecnología de última generación requerida por cada especialidad, contando con equipamiento ginecológico, cardiológico, kinesiológico, etc.</div>
				</li>
				<li id="5">
					<span title="Equipamiento técnico">Equipamiento técnico</span>
					<div class="item-description">Equipamiento de primera. Área con nuevo tomógrafo helicoideal funcionando las 24hs.</div>
				</li>
				<li id="6">
					<span title="Laboratorio">Laboratorio</span>
					<div class="item-description">Laboratorio equipado con tecnología moderna, realizando análisis clínicos y bacteriológicos.</div>
				</li>
				<li id="7">
					<span title="Pediatría">Pediatría</span>
					<div class="item-description">Guardias pediátricas equipadas con juegos y entretenimientos para los más chicos.<br/></div>
				</li>
			</ul>

			<article class="container-all-slider">
				<div class="container-slider slider-active" id="slider-1">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/edificio-1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/edificio-2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/edificio-3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>
						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/slider/edificio-1.jpg"/></a>
						<a class="image-secondary" id="image-2" href=""><img alt="" src="<?= base_url(); ?>img/slider/edificio-2.jpg"/></a>
						<a class="image-secondary" id="image-3" href=""><img alt="" src="<?= base_url(); ?>img/slider/edificio-3.jpg"/></a>
					</div>
				</div>

				<div class="container-slider" id="slider-2">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-0.1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-0.2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-0.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 4</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-4.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 4</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-5.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>
						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-0.1.jpg"/></a>
						<a class="image-secondary" id="image-2" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-0.2.jpg"/></a>
						<a class="image-secondary" id="image-3" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-0.jpg"/></a>
						<a class="image-secondary" id="image-4" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-1.jpg"/></a>
						<a class="image-secondary" id="image-5" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-2.jpg"/></a>
						<a class="image-secondary" id="image-6" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-3.jpg"/></a>
						<a class="image-secondary" id="image-7" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-4.jpg"/></a>
						<a class="image-secondary" id="image-8" href=""><img alt="" src="<?= base_url(); ?>img/slider/sala-de-espera-5.jpg"/></a>
					</div>
				</div>

				<div class="container-slider" id="slider-3">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/habitaciones-0.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/habitaciones-1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/habitaciones-2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/habitaciones-3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 4</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/habitaciones-4.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/habitaciones-5.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>
						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/slider/habitaciones-0.jpg"/></a>
						<a class="image-secondary" id="image-2" href=""><img alt="" src="<?= base_url(); ?>img/slider/habitaciones-1.jpg"/></a>
						<a class="image-secondary" id="image-3" href=""><img alt="" src="<?= base_url(); ?>img/slider/habitaciones-2.jpg"/></a>
						<a class="image-secondary" id="image-4" href=""><img alt="" src="<?= base_url(); ?>img/slider/habitaciones-3.jpg"/></a>
						<a class="image-secondary" id="image-5" href=""><img alt="" src="<?= base_url(); ?>img/slider/habitaciones-4.jpg"/></a>
						<a class="image-secondary" id="image-6" href=""><img alt="" src="<?= base_url(); ?>img/slider/habitaciones-5.jpg"/></a>
					</div>
				</div>

				<div class="container-slider" id="slider-4">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/consultorios-1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/consultorios-2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/slider/consultorios-1.jpg"/></a>
						<a class="image-secondary" id="image-2" href=""><img alt="" src="<?= base_url(); ?>img/slider/consultorios-2.jpg"/></a>
					</div>
				</div>

				<div class="container-slider" id="slider-5">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-4.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 4</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-5.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-6.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-7.1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-7.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-9.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 4</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-10.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-11.1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-11.2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-1.jpg"/></a>
						<a class="image-secondary" id="image-2" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-2.jpg"/></a>
						<a class="image-secondary" id="image-3" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-3.jpg"/></a>
						<a class="image-secondary" id="image-4" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-4.jpg"/></a>
						<a class="image-secondary" id="image-5" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-5.jpg"/></a>
						<a class="image-secondary" id="image-6" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-6.jpg"/></a>
						<a class="image-secondary" id="image-7" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-7.1.jpg"/></a>
						<a class="image-secondary" id="image-8" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-7.jpg"/></a>
						<a class="image-secondary" id="image-9" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-9.jpg"/></a>
						<a class="image-secondary" id="image-10" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-10.jpg"/></a>
						<a class="image-secondary" id="image-11" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-11.1.jpg"/></a>
						<a class="image-secondary" id="image-12" href=""><img alt="" src="<?= base_url(); ?>img/slider/equipamiento-tecnico-11.2.jpg"/></a>
					</div>
				</div>

				<div class="container-slider" id="slider-6">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/laboratorio-1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/laboratorio-2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/laboratorio-3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/slider/laboratorio-1.jpg"/></a>
						<a class="image-secondary" id="image-2" href=""><img alt="" src="<?= base_url(); ?>img/slider/laboratorio-2.jpg"/></a>
						<a class="image-secondary" id="image-3" href=""><img alt="" src="<?= base_url(); ?>img/slider/laboratorio-3.jpg"/></a>
					</div>
				</div>

				<div class="container-slider" id="slider-7">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/pediatria-1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/pediatria-2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/slider/pediatria-3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/slider/pediatria-1.jpg"/></a>
						<a class="image-secondary" id="image-2" href=""><img alt="" src="<?= base_url(); ?>img/slider/pediatria-2.jpg"/></a>
						<a class="image-secondary" id="image-3" href=""><img alt="" src="<?= base_url(); ?>img/slider/pediatria-3.jpg"/></a>
					</div>
				</div>
			</article>

		</section>
	</main>
