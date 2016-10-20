<body>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="<?= base_url(); ?>index">Home</a></span>
			<span><a class="active" href="">Coberturas Médicas</a></span>
		</div>

		<h1>
			Coberturas
			<br/>
			Médicas
		</h1>
		<div class="col-paragraph">
			<p>A continuación se dará detalle de las prestigiosas obras sociales que confiaron en nuestros servicios para darles atención médica a sus afiliados.</p>
		</div>
		
		<section>
			<ul class="element-list">
                                <? foreach($coberturas->result() as $cobertura):?>
                                <li class="logotypes-medic"><img title="" src="<?= base_url(); ?>img/obras-sociales/<?= $cobertura->imagen; ?>" />
                                <? endforeach; ?>                            
                        </ul>
		</section>
	</main>