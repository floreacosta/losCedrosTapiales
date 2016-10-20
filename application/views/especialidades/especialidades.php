<body>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="">Home</a></span>
			<span><a class="active" href="">Especialidades</a></span>
		</div>

		<h1>
			Especialidades
		</h1>
		<div class="col-paragraph">
			<p>Contamos con profesionales destacados para cada especialidad. Para poder atenderse se deberá sacar turno previo personalmente, por teléfono o vía web. Los horarios de atención son de 8hs. a 20hs. de Lunes a Viernes contando con guardias los 365 días del año tanto en el área clínica, quirúrgica y pediátrica.</p>
		</div>
		<section>
			<ul id="element-list" class="element-list">
				<?
                                $contador = 0; //Contador para saber si es la primer palabra de las especialidades
                                foreach($especialidades->result() as $especialidad):

                                    $inicialActual = substr($especialidad->nombre, 0, 1); //Guardo la inicial de la palabra
                                    if($contador === 0): //Si es la primer palabra incializo la variables de inicial anterior para la comparacion
                                        $inicialAnterior = "";
                                    endif;

                                    if($contador !== 0): //Esto es para evitar que se agregue un cierre de div en la primer palabra
                                        if($inicialAnterior !== $inicialActual): //Si la inicial anterior es distinta a la nueva primero cierro el div
                                ?>
                                    </div>
                                <?
                                        endif;
                                    endif;

                                    if($inicialActual !== $inicialAnterior ){ //Si la inicial nueva es distinta a la anterior imprimo la inicial
                                ?>
                                    <div>
                                        <h3>
                                        <?= substr($especialidad->nombre, 0, 1); ?>
                                        </h3>
                                        <li class="information-item">
																								<span onClick="modalEspecialidades()" id=<?= $especialidad->id; ?> ><?= $especialidad->nombre; ?></span>
                                                <article id="modal<?= $especialidad->id; ?>" class="modal">
                                                        <div class="modal-container">
                                                                <button class="button-close-information" id="button-close-information" title="Cerrar"></button>
                                                                <h2><?= $especialidad->nombre; ?></h2>
                                                                <h5>Nuestros profesionales</h5>
                                                                <ul>
                                                                    <? foreach($doctoresConEspecialidad->result() as $doctorConEspecialidad){
                                                                        if($doctorConEspecialidad->idEspecialidad === $especialidad->id){ ?>
                                                                        <li class="col-3">
                                                                            <h4><?= strtolower($doctorConEspecialidad->nombre); ?></h4>
                                                                        </li>
                                                                    <?
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                        </div>
                                                </article>
                                        </li>
                                <?
                                    }else{ //Si son iguales solo imprimo la especialidad
                                ?>
                                    <li class="information-item">
																			<span onClick="modalEspecialidades()" id=<?= $especialidad->id; ?> ><?= $especialidad->nombre; ?></span>
                                    	<article id="modal<?= $especialidad->id; ?>" class="modal">
                                            <div class="modal-container">
                                                    <button class="button-close-information" id="button-close-information" title="Cerrar"></button>
                                                    <h2><?= $especialidad->nombre; ?></h2>
                                                    <h5>Nuestros profesionales</h5>
                                                    <ul>
                                                            <? foreach($doctoresConEspecialidad->result() as $doctorConEspecialidad){
                                                                        if($doctorConEspecialidad->idEspecialidad === $especialidad->id){ ?>
                                                                        <li class="col-3">
                                                                            <h4> <?= strtolower($doctorConEspecialidad->nombre); ?></h4>
                                                                        </li>
                                                            <?
                                                                }
                                                            }
                                                            ?>
                                                    </ul>
                                            </div>
                                    </article>
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
