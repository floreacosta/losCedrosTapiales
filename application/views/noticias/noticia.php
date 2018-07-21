<body>
	<main class="noticia-individual-page" aria-label="Contenido para">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span>
				<a aria-label="Inicio" role="button" href="<?= base_url(); ?>index">Inicio</a>
			</span>
			<span aria-label="Noticias">Noticias</span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Noticia item <?= $id ?></h1>
			<p class="section-subtitle">Noticias introducción a la sección</p>
		</div>

		<section class="noticia-individual-content">
			<? foreach($noticia->result() as $key=>$item): ?>
				<article aria-label="<?= $item->titulo ?>" class="noticia-item-container" id="noticia_<?= $item->id ?>">
					<div class="noticia-item-heading">
						<h2 class="noticia-item-title"><?= $item->titulo ?></h2>
						<p class="noticia-item-subtitle"><?= $item->bajada ?></p>
					</div>

					<figure class="noticia-item-image-container">
						<img alt="Imagen representativa de <?= $item->titulo ?>" class="noticia-item-image" src="<?= $item->imagen ?>" />
						<figcaption class="noticia-item-image-description">
							<?= $item->descripcionImagen ?>
						</figcaption>
					</figure>

					<p class="noticia-item-bajada"><?= $item->cuerpo ?></p>
				</article>
				<?
				endforeach;
			?>
		</section>
	</main>
