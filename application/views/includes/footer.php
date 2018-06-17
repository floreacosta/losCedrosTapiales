	<footer class="global-footer">
		<div class="search-input-component-container mobile-component">
      <form class="search-form" action="<?= base_url(); ?>buscar" method="post">
				<label class="common-input search-input-container">
					<input class="search-input" type="text" placeholder="Buscar..." value="" name="search" />
				</label>
				<button class="search-button" type="submit" value="">Buscar</button>
      </form>
		</div>

		<div class="col-4 institutional">
			<div class="logo">
				<a href="<?= base_url(); ?>index"><img src="<?= base_url(); ?>img/logo.png" title="Clínica Los Cedros de Tapiales S.A."/></a>
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
				<li><a href="<?= base_url(); ?>index">Home</a></li>
				<li><a href="<?= base_url(); ?>instalaciones">Instalaciones</a></li>
				<li><a href="<?= base_url(); ?>especialidades">Especialidades</a></li>
				<li><a href="<?= base_url(); ?>coberturamedica">Coberturas</a></li>
				<li><a href="<?= base_url(); ?>servicios">Servicios</a></li>
			</ul>
		</div>

		<div class="contact-information-container line-phone">
			<h3 class="contact-information-title">Líneas rotativas</h3>
			<p class="contact-information-content">
				(011) 4622-8188 / (011) 4622-8199
				<br/>
				(011) 4622-8203 / (011) 4622-8209
			</p>
		</div>

		<div class="search-input-component-container desktop-component">
      <form class="search-form" action="<?= base_url(); ?>buscar" method="post">
				<label class="common-input search-input-container">
					<input class="search-input" type="text" placeholder="Buscar..." value="" name="search" />
				</label>
				<button class="search-button" type="submit" value="">Buscar</button>
      </form>
		</div>
	</footer>

	<article class="extra-information">
		<span>2018 | Design and Developer by <a href="#">Acosta Prado</a></span>
		<!-- <span>Sanatorio Privado Madero</span> -->
	</article>
</body>
</html>
