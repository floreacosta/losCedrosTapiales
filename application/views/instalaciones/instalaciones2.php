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
			<ul class="menu-instalaciones2" onClick="openDescription()">
				<li id="1" class="item-active">
					<span title="Edificio">Edificio</span>
					<div class="item-description">Este es el edificio clinica los cedros, que cuenta con blabla y con otros blabla.</div>
				</li>
				<li id="2">
					<span title="Sala de espera">Sala de espera</span>
					<div class="item-description">Este es el edificio clinica los cedros, que cuenta con blabla y con otros blabla.</div>
				</li>
				<li id="3">
					<span title="Habitaciones">Habitaciones</span>
					<div class="item-description">Este es el edificio clinica los cedros, que cuenta con blabla y con otros blabla.</div>
				</li>
				<li id="4"><span title="Consultorios">Consultorios</span></li>
				<li id="5"><span title="Equipamiento técnico">Equipamiento técnico</span></li>
				<li id="6"><span title="Laboratorio">Laboratorio</span></li>
				<li id="7"><span title="Pediatría">Pediatría</span></li>
			</ul>

			<article class="container-all-slider">
				<div class="container-slider slider-active" id="slider-1">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="bxslider content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/4.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 4</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/5.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>
						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/2.jpg"/></a>
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/3.jpg"/></a>
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/4.jpg"/></a>
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/5.jpg"/></a>
					</div>
				</div>

				<div class="container-slider" id="slider-2">
					<button class="button-prev" id="button-prev" title="Anterior"></button>
					<button class="button-next" id="button-next" title="Siguiente"></button>

					<figure class="image-primary">
						<ul class="bxslider content-imagen" id="slider-container-images">
							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/2.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 2</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/1.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 1</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/3.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 3</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/4.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 4</figcaption>
							</li>

							<li class="content-image-primary">
								<img alt="" src="<?= base_url(); ?>img/5.jpg"/>
								<figcaption class="image-description">Descripción de la imagen 5</figcaption>
							</li>
						</ul>
					</figure>

					<div class="container-image-secondary">
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/2.jpg"/></a>
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/3.jpg"/></a>
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/4.jpg"/></a>
						<a class="image-secondary" href=""><img alt="" src="<?= base_url(); ?>img/5.jpg"/></a>
					</div>
				</div>
			</article>

		</section>
	</main>
