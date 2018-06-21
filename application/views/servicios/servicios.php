<body>
	<main class="servicios-page" aria-label="Servicios">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span>
				<a aria-label="Inicio" href="<?= base_url(); ?>index">Inicio</a>
			</span>
			<span aria-label="Servicios">Servicios</span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Servicios Prestados</h1>
		</div>

		<section class="servicios-content">
			<?
				foreach($servicios->result() as $servicio):
					?>
						<div class="prevention-item">
							<h2><?= $servicio->nombre; ?></h2>
							<h3><?= $servicio->jefe; ?></h3>
							<p><?= $servicio->descripcion; ?></p>
						</div>
					<?
				endforeach;
			?>
		</section>
	</main>
