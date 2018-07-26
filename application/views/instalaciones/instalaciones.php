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
			<!-- <div class="photograpy-primary">
				<div id="box-1" class="box-description flecha-right">
					<p>Sanatorio Privado Madero ofrece una infraestructura de de 4 plantas totalmente renovados.</p>
				</div>
				<div id="box-2" class="box-description flecha-left">
					<p>Posee 5 sectores de internación clínica, quirúrgica y de obstetricia.</p>
				</div>
				<a name="edificio"></a>
				<img src="<?= base_url(); ?>img/slider/2018-edificio-maqueta.jpg" alt="Sanatorio Privado Madero"/>
			</div> -->

			<!-- <h2 class="instalaciones-subheading">Recorrido por las instalaciones</h2> -->
			<ul class="menu-instalaciones">
	      <?
					foreach($categorias->result() as $key=>$categoria):
						if ($key === 0) { ?>
							<li class="item-container item-active" id="<?= $categoria->id ?>">
						<? } else { ?>
							<li class="item-container" id="<?= $categoria->id ?>">
						<? } ?>
								<div class="item-content">
									<span class="item-category" title="<?= $categoria->nombre ?>"><?= $categoria->nombre ?></span>
									<? if ($categoria->descripcion !== '') {
										?> <div class="item-description"><?= $categoria->descripcion ?></div><?
									} ?>
								</div>

								<? if ($key === 0) { ?>
									<div class="container-slider slider-active" id="slider-<?= $categoria->id ?>">
								<? } else { ?>
		      				<div class="container-slider" id="slider-<?= $categoria->id ?>">
								<? } ?>
							    <figure class="image-primary">
											 <button class="button-prev disabled" id="button-prev" title="Anterior"></button>
											 <button class="button-next" id="button-next" title="Siguiente"></button>
												<ul class="content-imagen" id="slider-container-images">
						              <?
														foreach($instalaciones->result() as $instalacion):
															if($instalacion->idCategoria === $categoria->id) {
																?>
								                  <li class="content-image-primary">
								                    <img alt="<?= $instalacion->imagen ?>" src="<?= base_url(); ?>img/slider/<?= $instalacion->imagen ?>"/>
								                    <figcaption class="image-description"><?= $instalacion->descripcion ?></figcaption>
								                  </li>
						                  	<?
															}
														endforeach;
													?>
							          </ul>
							    </figure>

						      <div class="container-image-secondary">
						        <?
											foreach($instalaciones->result() as $instalacion):
												if($instalacion->idCategoria === $categoria->id) {
													?>
								            <button class="image-secondary" id="image-<?= $categoria->id ?>">
															<img alt="" src="<?= base_url(); ?>img/slider/<?= $instalacion->imagen ?>"/>
														</button>
							          	<?
												}
											endforeach;
										?>
					        </div>
					      </div>
              </li>
	      		<?
					endforeach;
				?>
			</ul>
		</section>
	</main>
