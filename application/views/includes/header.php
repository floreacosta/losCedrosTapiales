	<header class="global-header-container">
		<div class="logo logo-container">
			<a href="<?= base_url(); ?>" title="Sanatorio Privado Madero" class="logo-link-container">
				<img alt="Sanatorio Privado Madero" src="<?= base_url(); ?>img/logo.png" class="logo-image" />
			</a>
		</div>

		<div class="hamburguer-open-container">
			<button class="hamburguer-button" id="hamburguer-open-menu">
				<hr/>
				<hr/>
				<hr/>
			</button>
		</div>

		<nav class="menu global-menu-container">
			<div class="global-menu-content-component">
				<div class="hamburguer-close-menu">
					<button class="close-button toggle" id="hamburguer-close-menu">
						<hr/>
						<hr/>
					</button>
				</div>

				<ul id="element" class="global-menu-content menu-element">
					<li class="global-menu-item">
						<a href="<?= base_url(); ?>institucional" id="institucional" title="Institucional">Institucional</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>instalacion" id="instalacion" title="Instalaciones">Instalaciones</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>especialidad" id="especialidad" title="Especialidades">Especialidades</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>coberturamedica" id="coberturamedica" title="Coberturas Médicas">Coberturas</a>
					</li>

					<li class="global-menu-item">
						<a href="<?= base_url(); ?>servicio" id="servicio" title="Servicios">Servicios</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="fake-header" aria-hidden="true"></div>
	<button class="scroll-to-top">Scroll to Top</button>
