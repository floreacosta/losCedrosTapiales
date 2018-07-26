<body>
	<main class="search-page" aria-label="Resultados de búsqueda">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span><a aria-label="Inicio" role="button" href="<?= base_url(); ?>">Inicio</a></span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Resultados de búsqueda</h1>
		</div>

		<section class="search-content">
      <? if(count($resultadosBusqueda) === 0) { ?>
          <div class="prevention-item">
            <h2>Su busqueda no coincidió con ninguna sección</h2>
          </div>
      <? } else {
        foreach($resultadosBusqueda as $resultado) {
        ?>
        <div class="prevention-item">
          <h2><?= ucfirst($resultado); ?></h2>
          <p><a href="<?= base_url(); ?><?= $resultado; ?>">Ir a la sección</a></p>
        </div>
    	<?    }
      }
      ?>
		</section>
	</main>
