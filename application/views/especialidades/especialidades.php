<body>
	<main class="especialidades-page" aria-label="Especialidades">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span><a aria-label="Inicio" href="<?= base_url(); ?>index">Inicio</a></span>
			<span aria-label="Especialidades">Especialidades</span>
		</nav>

		<div class="subheading-section">
			<h1 class="section-title">Especialidades</h1>
			<p class="section-subtitle">Contamos con profesionales destacados para cada especialidad. Para poder atenderse se deberá sacar turno previo personalmente, por teléfono o vía web. Los horarios de atención son de 8hs. a 20hs. de Lunes a Viernes contando con guardias los 365 días del año tanto en el área clínica, quirúrgica y pediátrica.</p>
		</div>

		<section class="especialidades-content">
			<ul id="element-list" class="element-list">
				<?
          $contador = 0; //Contador para saber si es la primer palabra de las especialidades
          foreach ($especialidades->result() as $especialidad):
						$inicialActual = substr($especialidad->nombre, 0, 1); //Guardo la inicial de la palabra
            if ($contador === 0): //Si es la primer palabra incializo la variables de inicial anterior para la comparacion
                $inicialAnterior = "";
            endif;

            if ($contador !== 0): //Esto es para evitar que se agregue un cierre de div en la primer palabra
              if($inicialAnterior !== $inicialActual): //Si la inicial anterior es distinta a la nueva primero cierro el div
                ?> </li> <?
              endif;
            endif;

						if ($inicialActual !== $inicialAnterior ) { //Si la inicial nueva es distinta a la anterior imprimo la inicial
              ?>
	              <div class="information-item-container">
	                <h3 class="especialidad-letter"><?= substr($especialidad->nombre, 0, 1); ?></h3>
								</div>

                <li class="information-item information-content">
									<button class="especialidades-title especialidades-open-overlay" id="especialidad_y_profesionales_button" ><?= $especialidad->nombre; ?></button>

                  <div id="modal_<?= $especialidad->id; ?>" class="general-overlay-container especialidades-overlay-container">
										<div class="general-overlay-content-component">
											<header class="general-header-overlay">
												<h2 class="especialidades-category-title"><?= $especialidad->nombre; ?></h2>
										    <button class="general-close-overlay-button button-close-information" id="button-close-information">Close Overlay</button>
										  </header>

											<div class="general-overlay-content">
												<div class="especialidades-overlay-content">
		                      <h3 class="especialidades-subtitle">Nuestros profesionales</h3>

		                      <ul class="especialistas-list">
		                        <? foreach($doctoresConEspecialidad->result() as $doctorConEspecialidad){
		                          if($doctorConEspecialidad->idEspecialidad === $especialidad->id) {
																?> <li class="especialista-item"><?= strtolower($doctorConEspecialidad->nombre); ?></li> <?
		                          }
	                        	} ?>
		                      </ul>
		                    </div>
											</div>
										</div>
                  </div>
                </li>
              	<? } else { //Si son iguales solo imprimo la especialidad ?>
                <li class="information-item information-content">
									<button class="especialidades-title especialidades-open-overlay" id="especialidad_y_profesionales_button" ><?= $especialidad->nombre; ?></button>

                	<div id="modal_<?= $especialidad->id; ?>" class="general-overlay-container especialidades-overlay-container">
										<div class="general-overlay-content-component">
											<header class="general-header-overlay">
												<h2 class="especialidades-category-title"><?= $especialidad->nombre; ?></h2>
										    <button class="general-close-overlay-button button-close-information" id="button-close-information">Close Overlay</button>
										  </header>

	                    <div class="general-overlay-content">
												<div class="especialidades-overlay-content">
	                      	<h3 class="especialidades-subtitle">Nuestros profesionales</h3>

													<ul class="especialistas-list">
		                        <?
															foreach($doctoresConEspecialidad->result() as $doctorConEspecialidad) {
		                            if($doctorConEspecialidad->idEspecialidad === $especialidad->id) {
																?>
																	<li class="especialista-item"><?= strtolower($doctorConEspecialidad->nombre); ?></li>
		                      			<?
		                          	}
		                        	}
		                        ?>
		                      </ul>
	                    	</div>
											</div>
										</div>
                	</div>
                </li>
              <?
            }
	          $contador++;
	          $inicialAnterior = substr($especialidad->nombre, 0, 1); //Guardo el valor de la inicial para compararlo con la nueva
	        endforeach;
				?>
			</ul>
		</section>
	</main>
