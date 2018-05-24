<body>
	<main class="instalaciones-page">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span><a aria-label="Inicio" href="<?= base_url(); ?>index">Inicio</a></span>
			<span aria-label="Instalaciones">Instalaciones</span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Instalaciones <br/> y Equipamiento técnico</h1>
			<p class="section-subtitle">Para una mejor atención del paciente contamos con una importante y moderna infraestructura, edificio de 4 plantas totalmente renovados, más de 20 consultorios, 5 sectores de internación, nuevos y amplios quirófanos, nueva sala de parto y pre-parto, ampliación de la unidad de cuidados intensivos y sector de esterilización. Todos ellos cuentan con tecnología de última generación.</p>
		</div>

		<section class="instalaciones-content">
			<div class="photograpy-primary">
				<div id="box-1" class="box-description flecha-right">
					<p>Clínica Los Cedros de tapiales ofrece una infraestructura de de 4 plantas totalmente renovados.</p>
				</div>
				<div id="box-2" class="box-description flecha-left">
					<p>Posee 5 sectores de internación clínica, quirúrgica y de obstetricia.</p>
				</div>
				<a name="edificio"></a>
				<img src="<?= base_url(); ?>img/presentacion.jpg" alt="Clinica Los Cedros de Tapiales"/>
			</div>

			<h2 class="instalaciones-subheading">Recorrido por las instalaciones</h2>
			<ul class="menu-instalaciones" onClick="instalaciones()">
	      <?
          $contador = 0;
	      ?>
	      <? foreach($categorias->result() as $categoria): ?>
	          <?
              if($contador === 0){ ?>
              <li id="<?= $contador + 1 ?>" class="item-active">
                <span title="<?= $categoria->nombre ?>"><?= $categoria->nombre ?></span>
                <div class="item-description"><?= $categoria->descripcion ?></div>
              </li>
	          <? } else { ?>

	              <li id="<?= $contador + 1 ?>" >
                  <span title="<?= $categoria->nombre ?>"><?= $categoria->nombre ?></span>
                  <div class="item-description"><?= $categoria->descripcion ?></div>
	              </li>

	          <? }
	          $contador++;
	          ?>


	      <? endforeach; ?>
			</ul>
      <?
        $contador = 0;
      ?>
			<article class="container-all-slider">
      <?    foreach($categorias->result() as $categoria): ?>
      <?
				if ($contador === 0) {
			?>
      <div class="container-slider slider-active" id="slider-<?= $contador + 1 ?>">
      <?
				} else {
					?>
		      	<div class="container-slider" id="slider-<?= $contador + 1 ?>">
		      <?
				}
			?>
      <figure class="image-primary">
				 <button class="button-prev" id="button-prev" title="Anterior"></button>
				 <button class="button-next" id="button-next" title="Siguiente"></button>
					<ul class="content-imagen" id="slider-container-images">
              <? foreach($instalaciones->result() as $instalacion):
								?>
                  <?
										if($instalacion->idCategoria === $categoria->id) {
											?>
			                  <li class="content-image-primary">
			                    <img alt="" src="<?= base_url(); ?>img/slider/<?= $instalacion->imagen ?>"/>
			                    <figcaption class="image-description"><?= $instalacion->descripcion ?></figcaption>
			                  </li>
	                  	<?
										}
									?>
	              <?
							endforeach;
						?>
          </ul>
      </figure>
      <div class="container-image-secondary">
			 <?
			 	$imageContador = 0;
	      ?>
        <? foreach($instalaciones->result() as $instalacion): ?>
            <? if($instalacion->idCategoria === $categoria->id){ ?>
				<?
					$imageContador++;
				?>
            <a class="image-secondary" id="image-<?= $imageContador ?>" href="">
							<img alt="" src="<?= base_url(); ?>img/slider/<?= $instalacion->imagen ?>"/>
						</a>
          	<? } ?>
        	<? endforeach; ?>
        </div>
      </div>
      <? $contador++; ?>
      <? endforeach; ?>
			</article>
		</section>
	</main>
