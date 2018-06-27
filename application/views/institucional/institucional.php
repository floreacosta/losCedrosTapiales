<body>
	<main class="institucional-page" aria-label="Institucional">
		<nav class="box-container-breadcrum" role="navigation" aria-label="Breadcrum">
			<span>
        <a aria-label="Inicio" href="<?= base_url(); ?>index">Inicio</a>
      </span>
			<span aria-label="Institucional">Institucional</span>
		</nav>

		<section class="institucional-content">
      <h1 class="institutional-title">Misión</h1>
      <p>Somos una institución que busca rescatar las virtudes del pasado y utilizarlas como cimiento para crear un nuevo Sanatorio.</p>
      <p>Tenemos como principal objetivo el bienestar de nuestros pacientes y para logarlo estamos comprometidos a tener una conducta honesta, de respeto y dialogo continuo para satisfacer las necesidades del paciente y su familia.</p>

      <h2 class="institutional-title vision-title">Visión</h2>
      <p>Ser una institución que proporcione atención medica de calidad  con alto sentido humano.</p>

      <div class="history-container">
        <h2 class="institutional-title">Historia</h2>
        <p>La institución fue creada en 1983 en el marco de una alianza con la fundación Los Cedros. Esta ubicada en un punto estratégico del partido de La Matanza muy cerca de dos importantes accesos (Autopista Ricchieri y Avenida General Paz). Durante más de 30 años pudo brindar servicios de salud a toda su área de influencia.</p>
        <p>En el año 2015 se comenzó un ambicioso proyecto de reestructuración. Este proceso consistió no solo en cambios edilicios, sino también en un cambio de mentalidad, ubicando el bienestar del paciente como centro de toda toma de decisiones.</p>

        <p>Las remodelaciones incluyeron:</p>

        <ul class="history-content-list">
          <li><strong>Servicio de Emergencias:</strong> Remodelación y equipamiento de última generación.</li>
          <li><strong>Servicio de Internación:</strong> Se remodelaron las habitaciones y se aumento el numero de camas en un 25%.</li>
          <li><strong>Servicio de Terapia Intensiva Polivalente:</strong> remodelación, aumento de ls metros cuadrados destinados a ese área, aumento del numero de camas en un 60%, Equipamiento nuevo de ultima generación. </li>
          <li><strong>Centro Quirúrgico:</strong> Renovación, ampliación y equipamiento.</li>
          <li>Creación la <strong>Unidad de Cuidados Especiales</strong> para dar asistencia a patologías que requieren tratamiento particular.</li>
          <li>Remodelación del <strong>Servicio de Diagnostico por Imagen</strong>.</li>
          <li>Remodelación del <strong>Servicio de Video Endoscopia</strong>.</li>
          <li>Remodelación del <strong>Hospital de Día</strong>.</li>
          <li>Creación de una <strong>Unidad de Hemodiálisis</strong>.</li>
          <li>Creación del <strong>Servicio de Hemodinamia</strong>. Un espacio con equipo de ultima generación para diagnostico y tratamiento de patologías endovasculares.</li>
          <li>Creación del <strong>Servicio de Cirugía Cardiovascular</strong> para lograr resolver hasta las patologías de mayor complejidad.</li>
          <li>Creación del <strong>Centro de Rehabilitación</strong>. Servicio modelo para rehabilitación motora, neurocognitiva y respiratoria. Cuenta con un sector independiente de internación con habitaciones adaptadas, gimnasio y terapia ocupacional.</li>
          <li>Se generaron alianzas estratégicas con diferentes <strong>Entidades</strong> con el fin de brindar una solución a sus afiliados.</li>
        </ul>
      </div>

      <p>Finalizado todo este proceso y entusiasmados por los logros obtenidos en tan corto plazo. En el año 2018 se decidió rebautizar la institución y darle un nombre que identifique el nuevo proyecto. Así nace el <strong class="institucional-content-item">SANATORIO PRIVADO MADERO.</strong></p>

			<div class="autoridades-container">
				<h2 class="institutional-title">Autoridades</h2>
				<div class="autoridades-content">
					<?
						foreach($autoridades->result() as $autoridad):
							if ($autoridad->nombre !== 'Indefinido') {
								?>
									<div class="autoridad-item">
										<figure class="autoridad-image">
											<img alt="<?= $autoridad->nombre; ?>" src="img/<?= $autoridad->imagen; ?>" />
										</figure>
										<div class="autoridad-information">
											<h2 class="autoridad-name"><?= $autoridad->nombre; ?></h2>
											<strong class="autoridad-title"><?= $autoridad->cargo; ?></strong>
											<a href="<?= $autoridad->cv ?>" class="cv-link">Ver Experiencia</a>
										</div>
									</div>
								<?
							}
						endforeach;
					?>
				</div>
			</div>
		</section>
	</main>
