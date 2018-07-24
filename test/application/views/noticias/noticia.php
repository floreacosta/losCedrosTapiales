<body>
	<main class="noticia-individual-page" aria-label="Contenido para <?= $noticia->titulo ?>">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span>
				<a aria-label="Inicio" role="button" href="<?= base_url(); ?>index">Inicio</a>
			</span>
			<span aria-label="Noticias">Noticias</span>
		</nav>

		<!-- <div class="subheading-section">
			<h1 class="section-title">Noticia item</h1>
			<p class="section-subtitle">Noticias introducción a la sección</p>
		</div> -->

		<section class="noticia-individual-content">
			<article aria-live="<?= $noticia->titulo ?>" class="noticia-item-container" id="noticia_<?= $noticia->id ?>">
				<div class="noticia-item-heading">
					<h2 class="noticia-item-title"><?= $noticia->titulo ?></h2>
					<p class="noticia-item-subtitle"><?= $noticia->bajada ?></p>
				</div>

				<figure class="noticia-item-image-container">
					<img alt="Imagen representativa de <?= $noticia->titulo ?>" class="noticia-item-image" src="<?= base_url(); ?>img/noticias/<?= $noticia->imagen ?>" />
					<figcaption class="noticia-item-image-description">
						<?= $noticia->descripcionImagen ?>
					</figcaption>
				</figure>

				<p class="noticia-item-bajada"><?= $noticia->cuerpo ?></p>
			</article>
		</section>
	</main>
