<body>
	<main class="cobertura-medica-page" aria-label="Coberturas Médicas">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span><a aria-label="Inicio" href="<?= base_url(); ?>index">Inicio</a></span>
			<span aria-label="Cobertura Médica">Coberturas Médicas</span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Coberturas <br/> Médicas</h1>
			<p class="section-subtitle">A continuación se dará detalle de las prestigiosas obras sociales que confiaron en nuestros servicios para darles atención médica a sus afiliados.</p>
		</div>

		<section class="cobertura-medica-content">
			<ul class="element-list">
				<?
					foreach($coberturas->result() as $cobertura):
						?>
							<li class="logotypes-medic">
								<img title="" src="<?= base_url(); ?>img/obras-sociales/<?= $cobertura->imagen; ?>" />
							</li>
						<?
					endforeach;
				?>
			</ul>
		</section>
	</main>
