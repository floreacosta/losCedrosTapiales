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
			<span><a class="active" href="">Especialidades</a></span>
		</div>

		<h1>
			Especialidades
		</h1>
		<div class="col-paragraph">
			<p>Contamos con profesionales destacados para cada especialidad. Para poder atenderse se deberá sacar turno previo personalmente, por teléfono o vía web. Los horarios de atención son de 8hs. a 20hs. de Lunes a Viernes contando con guardias los 365 días del año tanto en el área clínica, quirúrgica y pediátrica.</p>
		</div>
		<section>
			<ul id="element-list" class="element-list" onClick="modalEspecialidades()">
				<div>
					<h3>A</h3>
					<li class="information-item">
						<a href="#alergia-y-neumonologia">Alergia y Neumología</a>
						<article id="alergia-y-neumonologia" class="modal">
							<div class="modal-container">					
								<button class="button-close-information" id="button-close-information" title="Cerrar"></button>
								<h2>Cirugía Infantil</h2>
								<ul>
									<li class="col-3">
										<h4>Dr. Alejandro Rizk</h4>
										<p>Martes de 14.00 a 15.00 hs.</p>
										<p>Viernes de 16.00 a 17.00 hs</p>
									</li>
									<li class="col-3">
										<h4>Dr. Alejandro Rizk</h4>
										<p>Martes de 14.00 a 15.00 hs.</p>
										<p>Viernes de 16.00 a 17.00 hs</p>
									</li>
									<li class="col-3">
										<h4>Dr. Alejandro Rizk</h4>
										<p>Martes de 14.00 a 15.00 hs.</p>
										<p>Viernes de 16.00 a 17.00 hs</p>
									</li>
								</ul>
							</div>
						</article>
					</li>
					<li class="information-item">
						<a href="#anestesiologia-cardiovascular">Anestesiología Cardiovascular</a>
						<article id="anestesiologia-cardiovascular" class="modal">
							<div class="modal-container">					
								<button class="button-close-information" title="Cerrar"></button>
								<h2>Cirugía Infantil</h2>
								<ul>
									<li class="col-3">
										<h4>Dr. Alejandro Rizk</h4>
										<p>Martes de 14.00 a 15.00 hs.</p>
										<p>Viernes de 16.00 a 17.00 hs</p>
									</li>
									<li class="col-3">
										<h4>Dr. Alejandro Rizk</h4>
										<p>Martes de 14.00 a 15.00 hs.</p>
										<p>Viernes de 16.00 a 17.00 hs</p>
									</li>
									<li class="col-3">
										<h4>Dr. Alejandro Rizk</h4>
										<p>Martes de 14.00 a 15.00 hs.</p>
										<p>Viernes de 16.00 a 17.00 hs</p>
									</li>
								</ul>
							</div>
						</article>
					</li>
				</div>

				<div>
					<h3>C</h3>
					<li class="information-item">
						<a href="#cirugia-infantil">Cirugía Cabeza y Cuello</a>
					</li>
					<li class="information-item"><a href="#">Cirugía General <b>(guardia permanente)</b></a></li>
					<li class="information-item"><a href="#">Cirugía Infantil</a></li>
					<li class="information-item"><a href="#">Cirugía Plástica reparadora</a></li>
					<li class="information-item"><a href="#">Cirugía Vascular</a></li>
					<li class="information-item"><a href="#">Clínica Médica <b>(guardia permanente)</b></a></li>
					<li class="information-item"><a href="#">Columna</a></li>
				</div>

				<div>
					<h3>D</h3>
					<li class="information-item"><a href="#cirugia-infantil">Diabetes y Nutrición</a></li>
					<li class="information-item"><a href="#">Dietología</a></li>
					<li class="information-item"><a href="#">Dermatología</a></li>
				</div>

				<div>
					<h3>E</h3>
					<li class="information-item"><a href="#">Ecografías <b>(guardia permanente)</b></a></li>
					<li class="information-item"><a href="#">Endocrinología</a></li>
					<li class="information-item"><a href="#">Especialista en Flebología</a></li>
				</div>

				<div>
					<h3>G</h3>
					<li class="information-item"><a href="#">Gastroenterología</a></li>
					<li class="information-item"><a href="#">Ginecología y obstetricia <b>(guardia permanente)</b></a></li>
				</div>

				<div>
					<h3>H</h3>
					<li class="information-item"><a href="#">Hematología</a></li>
				</div>

				<div>
					<h3>I</h3>
					<li class="information-item"><a href="#">Infectología</a></li>
				</div>

				<div>
					<h3>N</h3>
					<li class="information-item"><a href="#">Nefrología</a></li>
					<li class="information-item"><a href="#">Neumonología</a></li>
					<li class="information-item"><a href="#">Neurocirugía</a></li>
					<li class="information-item"><a href="#">Neurología</a></li>
				</div>

				<div>
					<h3>O</h3>
					<li class="information-item"><a href="#">Obstetricia</a></li>
					<li class="information-item"><a href="#">Oftalmología</a></li>
					<li class="information-item"><a href="#">Otorrinolaringología</a></li>
				</div>

				<div>
					<h3>P</h3>
					<li class="information-item"><a href="#">Patología Mamaria</a></li>
					<li class="information-item"><a href="#">Pediatría <b>(guardia permanente)</b></a></li>
				</div>

				<div>
					<h3>R</h3>
					<li class="information-item"><a href="#">Reumatología</a></li>
				</div>

				<div>
					<h3>T</h3>
					<li class="information-item"><a href="#">Traumatología <b>(guardia permanente)</b></a></li>
				</div>

				<div>
					<h3>U</h3>
					<li class="information-item"><a href="#">Urología</a></li>
				</div>

			</ul>
		</section>
	</main>
<?php
	include_once('include/footer.php');
?>