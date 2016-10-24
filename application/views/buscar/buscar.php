<body>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="<?= base_url(); ?>index">Home</a></span>
		</div>

		<h1>
			Resultados de busqueda
		</h1>
		
		<section>
			
                            <? if(count($resultadosBusqueda) === 0){ ?>
                                <div class="prevention-item">
                                    <h2>Su busqueda no coincidió con ninguna sección</h2>
                                </div>
                                <? } else { 
                                foreach($resultadosBusqueda as $resultado){
                                ?>
                                <div class="prevention-item">
                                    <h2><?= ucfirst($resultado); ?></h2>
                                    <p><a href="<?= base_url(); ?><?= $resultado; ?>">Ir a la sección</a></p>
                                </div>
                            <?    }
                            }
                            ?>
		</section>
	</main>