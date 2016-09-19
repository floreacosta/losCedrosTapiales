<?php
	include_once('include/head.php');
?>
<body>

	<?php
		include_once('include/header.php');
		include_once('include/tooltip.php');
	?>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="">Home</a></span>
			<span><a class="active" href="">Coberturas Médicas</a></span>
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
				<img class="second-img" src="img/sala-de-espera.jpg" alt="Sala de espera de guardia"/>
			</div>

			<div class="photograpy-secondary">
				<div id="box-3" class="box-description flecha-bottom">
					<p>Áreas de internación con amplia iluminación y cómoda accesibilidad para todo tipo de pacientes.</p>
				</div>
				<img src="img/ascensor.jpg" alt="Instalaciones internas"/>

				<div id="box-4" class="box-description flecha-top">
					<p>Las suites de internación disponen con aire acondicionado, televisión satelital, Wifi y comodidades para acompañantes.</p>
				</div>
				<a name="habitaciones"></a>
				<img class="second-img" src="img/habitacion.jpg" alt="Suite para pacientes"/>
			</div>

			<div class="photograpy-secondary">
				<article class="photograpy-information">				
					<h1>
					</h1>
					<div class="col-paragraph-photograpy">
					</div>		
				</article>
				<div id="box-5" class="box-description flecha-right">
					<p>Consultorios equipados con tecnología de última generación requerida por cada especialidad, contando con equipamiento ginecológico, cardiológico, kinesiológico, etc.</p>
				</div>
				<a name="consultorios"></a>
				<img class="second-img" src="img/ginecologia.jpg" alt="Consultorio de ginecología"/>
			</div>

			<div class="photograpy-secondary">
				<div id="box-6" class="box-description flecha-bottom">
					<p>Equipamiento de primera. Área con nuevo tomógrafo helicoideal funcionando las 24hs.</p>
				</div>
				<a name="equipamiento-tecnico"></a>
				<img src="img/tomografo.jpg" alt="Tomografías computadas"/>

				<div id="box-7" class="box-description flecha-top">
					<p>Radiología. Sector de imágenes simples y contrastadas con guardias permanentes. </p>
				</div>			
				<img class="second-img" src="img/rayos.jpg" alt="Equipamiento de radiología"/>
			</div>

			<div class="photograpy-secondary">
				<article class="photograpy-information">				
					<h1>
					</h1>
					<div class="col-paragraph-photograpy">
					</div>		
				</article>
				<div id="box-8" class="box-description flecha-right">
					<p>Laboratorio equipado con tecnología moderna, realizando análisis clínicos y bacteriológicos.</p>
				</div>			
				<a name="laboratorio"></a>
				<img class="second-img" src="img/laboratorio.jpg" alt="Laboratorios"/>
			</div>

			<div class="photograpy-secondary">
				<div id="box-9" class="box-description flecha-bottom">
					<p>Guardias pediátricas equipadas con juegos y entretenimientos para los más chicos.</p>
				</div>
				<img src="img/pediatria.jpg" alt="Clinica Los Cedros de Tapiales"/>

				<div id="box-10" class="box-description flecha-top">
					<p>Área de internación pediátrica de máximo confort para el cuidado de cada paciente.</p>
				</div>
				<a name="pediatria"></a>
				<img class="second-img" src="img/habitacion-pediatria.jpg" alt="Habitación pediátrica"/>
			</div>

		</section>
	</main>

<?php
	include_once('include/footer.php');
?>
