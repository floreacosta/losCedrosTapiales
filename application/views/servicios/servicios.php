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
					if (($active_servicio !== NULL) && ($active_servicio == $servicio->id)) {
						?>
							<div class="prevention-item active-service" id="<?= $servicio->id; ?>">
						<?
					} else {
						?>
							<div class="prevention-item" id="<?= $servicio->id; ?>">
						<?
					}
						?>
							<h2 class="service-title"><?= $servicio->nombre; ?></h2>
							<?
							 if ($servicio->jefe !== 'Indefinido') {
								 ?>
								 <h3>
									 <span class="service-head-title">Jefe de área:</span>
									 <strong class="service-head-name"><?= $servicio->titulo;?> <?= $servicio->jefe; ?></strong>
								 </h3>
								 <?
							 }
							?>
							<p class="service-description"><?= $servicio->descripcion; ?></p>
						</div>
					<?
				endforeach;
			?>
		</section>
	</main>
