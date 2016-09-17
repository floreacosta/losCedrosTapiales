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
			<span><a href="">Segunda vista</a></span>
			<span><a class="active" href="">Especialidades</a></span>
		</div>

		<h1>
			Especialidades
		</h1>
		<div class="col-paragraph">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat leo id erat cursus, id congue leo maximus. Fusce sodales suscipit sem, ac imperdiet magna venenatis non. Aliquam erat volutpat. Suspendisse nec urna laoreet, hendrerit lorem quis, porta lorem. Nulla sed mi lorem.</p>
		</div>
		
		<section>
			<ul class="element-list">
				<div>
					<h3>A</h3>
					<li class="information-item">
						<a href="#alergia">Alergia</a>
						<article class="modal">
							<div id="alergia" class="modal-container">					
								<a class="button-close-information" href="#page" title="Cerrar"></a>
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
						<a href="#cirugia-infantil">Cirugía Infantil</a>
						<article class="modal">
							<div id="cirugia-infantil" class="modal-container">					
								<a class="button-close-information" href="#page" title="Cerrar"></a>
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
					<li class="information-item"><a href="#">Cardiología Adultos</a></li>
					<li class="information-item"><a href="#">Cardiología Infantil</a></li>
					<li class="information-item"><a href="#">Cirugía Adultos</a></li>
					<li class="information-item"><a href="#">Cardiología Infantil</a></li>
					<li class="information-item"><a href="#">Cirugía Plástica (niños y adultos)</a></li>
					<li class="information-item"><a href="#">Clínica Médica Adultos</a></li>
				</div>

				<div>
					<h3>D</h3>
					<li class="information-item"><a href="#">Dermatología (niños y adultos)</a></li>
					<li class="information-item"><a href="#">Dermatología Infantil</a></li>
					<li class="information-item"><a href="#">Diabetología Adultos</a></li>
				</div>
			</ul>
		</section>
	</main>
<?php
	include_once('include/footer.php');
?>
