<body>
	<main>
		<div class="box-container-breadcrum">
			<span><a href="<?= base_url(); ?>index">Home</a></span>
			<span><a class="active" href="">Instalaciones</a></span>
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
			<ul class="menu-instalaciones2" onClick="instalaciones()">
                            <? 
                                $contador = 0;
                            ?>
                            <?    foreach($categorias->result() as $categoria): ?>
                                <?
                                    if($contador === 0){ ?>
                                    <li id="<?= $categoria->id ?>" class="item-active">
                                        <span title="<?= $categoria->nombre ?>"><?= $categoria->nombre ?></span>
                                        <div class="item-description"><?= $categoria->descripcion ?></div>
                                    </li>
                                <? }else{ ?>
                                    
                                    <li id="<?= $categoria->id ?>" >
                                        <span title="<?= $categoria->nombre ?>"><?= $categoria->nombre ?></span>
                                        <div class="item-description"><?= $categoria->descripcion ?></div>
                                    </li>
                                
                                <? } 
                                $contador++;
                                ?>
                                
                                
                            <? endforeach; ?>
			</ul>
                        <? 
                            $contador = 0;
                        ?>    
			<article class="container-all-slider">
                            <?    foreach($categorias->result() as $categoria): ?>
                            <? if($contador === 0){ ?>
                            <div class="container-slider slider-active" id="slider-<?= $categoria->id ?>">
                            <? }else{ ?>
                            <div class="container-slider" id="slider-<?= $categoria->id ?>">
                            <? } ?>
                                <button class="button-prev" id="button-prev" title="Anterior"></button>
                                <button class="button-next" id="button-next" title="Siguiente"></button>
                                    <figure class="image-primary">
					<ul class="content-imagen" id="slider-container-images">
                                            <?    foreach($instalaciones->result() as $instalacion): ?>
                                                <? if($instalacion->idCategoria === $categoria->id){ ?>
                                                <li class="content-image-primary">
                                                    <img alt="" src="<?= base_url(); ?>img/<?= $instalacion->imagen ?>"/>
                                                    <figcaption class="image-description"><?= $instalacion->descripcion ?></figcaption>
                                                </li>
                                                <? } ?>
                                            <? endforeach; ?>                                            
                                        </ul>
                                    </figure>

                                    <div class="container-image-secondary">
                                        <?    foreach($instalaciones->result() as $instalacion): ?>
                                            <? if($instalacion->idCategoria === $categoria->id){ ?>
                                            <a class="image-secondary" id="image-1" href=""><img alt="" src="<?= base_url(); ?>img/<?= $instalacion->imagen ?>"/></a>
                                            <? } ?>
                                        <? endforeach; ?>
                                    </div>
                            </div>
                            <? $contador++; ?>
                            <? endforeach; ?>
                            
			</article>

		</section>
	</main>
