<body>
	<main class="estudios-page" aria-label="Estudios">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span>
				<a aria-label="Inicio" role="button" href="<?= base_url(); ?>index">Inicio</a>
			</span>
			<span aria-label="Estudios">Estudios</span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Estudios</h1>
			<p class="section-subtitle">Estudios introducción a la sección</p>
		</div>

		<section class="estudios-content">
			<nav class="estudios-tipos" aria-label="Tipos de Estudios">
				<?
					foreach($estudios_tipos->result() as $tipo):
						if ($tipo-> id == 1) {
							?>
							<button aria-label="<?= $tipo->nombre ?>" class="estudios-tipo-item active" id="<?= $tipo->id ?>">
							<?
						} else {
							?>
								<button aria-label="<?= $tipo->nombre ?>" class="estudios-tipo-item" id="<?= $tipo->id ?>">
							<?
						}
					?>
							<strong class="estudios-tipo-item-nombre"><?= $tipo->nombre ?></strong>
							<p class="estudios-tipo-item-descripcion"><?= $tipo->descripcion ?></p>
						</button>
					<?
					endforeach;
				?>
			</nav>

			<?
				foreach($estudios_tipos->result() as $tipo):
					if ($tipo-> id == 1) {
						?>
							<div class="estudios-list-container active estudio-list-<?= $tipo->id ?>" id="estudio_tipo_content_<?= $tipo->id ?>">
						<?
					} else {
						?>
							<div class="estudios-list-container estudio-list-<?= $tipo->id ?>" id="estudio_tipo_content_<?= $tipo->id ?>">
						<?
					}
						foreach($estudios_todos->result() as $estudio):
							if ($tipo->id == $estudio->idTipo) {
								?>
									<div aria-label="<?= $estudio->nombre ?>" class="estudios-item" id="estudio_<?= $estudio->id ?>">
										<strong class="estudios-item-nombre"><?= $estudio->nombre ?></strong>
										<div class="estudios-item-descripcion"><?= $estudio->descripcion ?></div>
									</div>
								<?
							}
						endforeach;
					?>
						</div>
					<?
				endforeach;
			?>

		</section>
	</main>
