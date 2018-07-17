	<header class="global-header-container">
		<div class="logo logo-container">
			<a href="<?= base_url(); ?>" title="Sanatorio Privado Madero" class="logo-link-container" role="button">
				<img alt="Sanatorio Privado Madero" src="<?= base_url(); ?>img/logo.png" class="logo-image" />
			</a>
		</div>

		<div class="hamburguer-open-container">
			<button class="hamburguer-button" id="hamburguer-open-menu" aria-label="Abrir menu global">
				<hr />
				<hr />
				<hr />
			</button>
		</div>

		<nav class="menu global-menu-container">
			<div class="global-menu-content-component">
				<div class="hamburguer-close-menu">
					<button class="close-button toggle" id="hamburguer-close-menu" aria-label="Cerrar menu global">
						<hr />
						<hr />
					</button>
				</div>

				<ul id="element" class="global-menu-content menu-element">
					<li class="global-menu-item">
						<a href="<?= base_url(); ?>institucional" id="institucional" aria-label="Institucional">Institucional</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>instalacion" id="instalacion" aria-label="Instalaciones">Instalaciones</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>estudio" id="estudio" aria-label="Especialidades">Estudios</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>especialidad" id="especialidad" aria-label="Especialidades">Especialidades</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>coberturamedica" id="coberturamedica" aria-label="Coberturas Médicas">Coberturas</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>servicio" id="servicio" aria-label="Servicios">Servicios</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="fake-header" aria-hidden="true" tabindex="-1"></div>
	<button class="scroll-to-top" aria-label="Volver a la parte superior del sitio">Scroll to Top</button>
