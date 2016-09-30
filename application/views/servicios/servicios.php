<body>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="">Home</a></span>
			<span><a class="active" href="">Servicios</a></span>
		</div>

		<h1>
			Servicios Prestados
		</h1>
		
		<section>
                        <? foreach($servicios->result() as $servicio): ?>    
                        
			<div class="prevention-item">
				<h2><?= $servicio->nombre; ?></h2>
				<p><?= $servicio->descripcion; ?></p>
			</div>
                        <? endforeach; ?>
		</section>
	</main>