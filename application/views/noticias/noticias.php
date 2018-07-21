<body>
	<main class="noticias-page" aria-label="Noticias">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span>
				<a aria-label="Inicio" role="button" href="<?= base_url(); ?>index">Inicio</a>
			</span>
			<span aria-label="Noticias">Noticias</span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Noticias</h1>
			<p class="section-subtitle">Noticias introducción a la sección</p>
		</div>

		<section class="noticias-content">
			<?
				$totalNoticias = count($noticias->result());
				if ($totalNoticias == 0) {
				?>
					<section class="noticias-empty">No hay noticias disponibles para ver.</section>
				<? } else {
					foreach($noticias->result() as $key=>$noticia):
					?>
						<a href="<?= base_url(); ?>noticias/noticia_<?= $noticia->id ?>" aria-live="<?= $noticia->titulo?>" class="noticia-item-container" id="noticia_<?= $noticia->id ?>">
							<div class="noticia-item-heading">
								<h2 class="noticia-item-title"><?= $noticia->titulo ?></h2>
								<p class="noticia-item-subtitle"><?= $noticia->bajada ?></p>
							</div>
						</a>
					<?
					endforeach;
				}
			?>
		</section>
	</main>
