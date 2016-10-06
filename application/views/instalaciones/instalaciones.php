<body>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="">Home</a></span>
			<span><a class="active" href="">Institucional</a></span>
		</div>

		<h1>
			Instalaciones
			<br/>
			y Equipamiento técnico
		</h1>
		<div class="col-paragraph">
			<p>Para una mejor atención del paciente contamos con una importante y moderna infraestructura, edificio de 4 plantas totalmente renovados, más de 20 consultorios, 5 sectores de internación, nuevos y amplios quirófanos, nueva sala de parto y pre-parto, ampliación de la unidad de cuidados intensivos y sector de esterilización. Todos ellos cuentan con tecnología de última generación.</p>
		</div>
		
		<section>
			<ul class="menu-instalaciones">
				<li><a href="#edificio" title="Edificio">Edificio</a></li>
				<li><a href="#sala-de-espera" title="Sala de espera">Sala de espera</a></li>
				<li><a href="#habitaciones" title="Habitaciones">Habitaciones</a></li>
				<li><a href="#consultorios" title="Consultorios">Consultorios</a></li>
				<li><a href="#equipamiento-tecnico" title="Equipamiento técnico">Equipamiento técnico</a></li>
				<li><a href="#laboratorio" title="Laboratorio">Laboratorio</a></li>
				<li><a href="#pediatria" title="Pediatría">Pediatría</a></li>
			</ul>

			<div class="photograpy-primary">
				<div id="box-1" class="box-description flecha-right">
					<p>Clínica Los Cedros de tapiales ofrece una infraestructura de de 4 plantas totalmente renovados.</p>
				</div>			
				<div id="box-2" class="box-description flecha-left">
					<p>Posee 5 sectores de internación clínica, quirúrgica y de obstetricia.</p>
				</div>			
				<a name="edificio"></a>
				<img src="img/presentacion.jpg" alt="Clinica Los Cedros de Tapiales"/>
			</div>

			<div class="photograpy-secondary">
				<article class="photograpy-information">
					<h1>
						Infraestructura
						<br/>
						modernizada
					</h1>
					<div class="col-paragraph-photograpy">
						<p>Área de consultorios externos con gran capacidad y comodidad. Se atienden todas las especialidades con turno previo. Sector de urgencias y emergencias con shock-rooms equipados con complejidad de cuidados críticos.</p>
					</div>
				</article>
				<a name="sala-de-espera"></a>
				<img class="second-img" src="<?= base_url(); ?>img/sala-de-espera.jpg" alt="Sala de espera de guardia"/>
			</div>
                        <? 
                            $contador = 0; 
                            $totalInstalaciones = count($instalaciones->result());
                        ?>
                        <? foreach($instalaciones->result() as $instalacion): 
                            
                            if($contador === 0):
                                $registro = 'primero';    
                            endif;    
                        ?>    
                        <? if($registro === 'primero'): ?>
                            <div class="photograpy-secondary">
				<div id="box-3" class="box-description flecha-bottom">
					<p><?= $instalacion->descripcion; ?></p>
				</div>
				<img src="<?= base_url(); ?>img/<?= $instalacion->imagen; ?>" alt="<?= $instalacion->nombre; ?>"/>                        
                        <? endif; ?>
                        
                        <? if($registro === 'segundo'): ?>
                                <div id="box-4" class="box-description flecha-top">
                                            <p><?= $instalacion->descripcion; ?></p>
                                    </div>
                                    <a name="habitaciones"></a>
                                    <img class="second-img" src="<?= base_url(); ?>img/<?= $instalacion->imagen; ?>" alt="<?= $instalacion->nombre; ?>"/>
                            </div>
                        
                        <? endif; ?>
                        
                        <? if($registro === 'tercero'): ?>
                            <div class="photograpy-secondary">
				<article class="photograpy-information">				
					<h1>
					</h1>
					<div class="col-paragraph-photograpy">
					</div>		
				</article>
				<div id="box-5" class="box-description flecha-right">
					<p><?= $instalacion->descripcion; ?></p>
				</div>
				<a name="consultorios"></a>
				<img class="second-img" src="<?= base_url(); ?>img/<?= $instalacion->imagen; ?>" alt="<?= $instalacion->nombre; ?>"/>
                            </div>
                        <? endif; ?>
                        
                        <? 
                        
                            if($totalInstalaciones === $contador && $registro === 'primero'):
                        ?>    
                            </div>
                        <?
                            endif;
                            $contador++;
                            if($registro === 'primero'):
                                $registro = 'segundo';
                            elseif($registro === 'segundo'):
                                $registro = 'tercero';
                            else:
                                $registro = 'primero';
                            endif;
                        endforeach; ?>

		</section>
	</main>