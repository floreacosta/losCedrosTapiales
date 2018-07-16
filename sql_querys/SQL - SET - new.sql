USE clinicaloscedros;

INSERT INTO jefe_sector (idEmpleado, cargo) VALUES
(52, "Director General"),
(18, "Director Médico"),
(87, "Director Administrativo"),
(88, "Jefa de Recursos Humanos"),
(23, "Gerencia Médica"),
(89, "Coordinación General"),
(90, "Coordinación de Terapia Intensiva"),
(91, "Jefa de Servicio de Emergencias");

INSERT INTO jefe_servicio (idEmpleado, cargo) VALUES
(52, "Jefe de Servicio de Internación"),
(92, "Jefe de Servicio de Hemodinamia"),
(64, "Jefe de Servicio de Cirugía Cardiovascular"),
(93, "Jefe De Servicio de Cardiología"),
(51, "Jefe de Servicio de Infectología"),
(94, "Jefe de Servicio de Rehabilitación"),
(28, "Jefe de Servicio de Ginecología y Obstetricia"),
(95, "Jefe de Servicio de Pediatría"),
(96, "Jefe de Servicio de Hemoterapia"),
(56, "Jefe de Servicio de Neurología"),
(98, "Jefe de Servicio de Cirugía de Cabeza y Cuello"),
(99, "Jefe de Servicio de Cirugía Plástica"),
(37, "Jefe de Servicio Otorrinolaringología"),
(100, "Jefe de Servicio de Neurocirugía"),
(18, "Jefe de Servicio de Cirugía"),
(23, "Jefe de Servicio de Neumonología"),
(101, "Jefe de Servicio de Diagnóstico por Imagen"),
(9, "Jefe de Servicio de Urología"),
(44, "Jefe de Servicio de Traumatología"),
(102, "Jefe de Servicio de Traumatología"),
(50, "Jefe de Servicio de Reumatología"),
(60, "Jefe de Cirugía de Torax"),
(97, "Jefe de Servicio de Laboratorio"),
(104, "Jefe de Servicio de Bacteriología"),
(105, "Jefe de Servicio de Endoscopía Digestiva"),
(106, "Jefe de Servicio de Endoscopía Digestiva"),
(63, "Jefe de Servicio de Oncología"),
(107, "Jefe de Servicio de Fibrobroncoscopía"),
(108, "Jefe de Servicio de Kinesiología"),
(89, "Jefe de Terapia Intensiva"),
(91, "Jefe de Servicio de Guardia"),
(62, "Jefe de Servicio de Hemodiálisis"),
(90, "Jefe de Unidad de Cuidados Especiales");

-- INSERT INTO categoria (id, nombre, descripcion) VALUES
-- (1, 'Sala de espera', 'Áreas de internación con amplia iluminación y cómoda accesibilidad para todo tipo de pacientes.'),
-- (3, 'Habitaciones', 'Las suites de internación disponen con aire acondicionado, televisión satelital, Wifi y comodidades para acompañantes.'),
-- (4, 'Edificio', 'Clínica Los Cedros de tapiales ofrece una infraestructura de de 4 plantas totalmente renovados.\r\nPosee 5 sectores de internación clínica, quirúrgica y de obstetricia.'),
-- (6, 'Consultorios', 'Consultorios equipados con tecnología de última generación requerida por cada especialidad, contando con equipamiento ginecológico, cardiológico, kinesiológico, etc.'),
-- (7, 'Equipamiento técnico', 'Equipamiento de primera. Área con nuevo tomógrafo helicoideal funcionando las 24hs.'),
-- (8, 'Laboratorio', 'Laboratorio equipado con tecnología moderna, realizando análisis clínicos y bacteriológicos.'),
-- (9, 'Pediatría', 'Guardias pediátricas equipadas con juegos y entretenimientos para los más chicos.'),
-- (10, 'Hemodiálisis', ''),
-- (11, 'Hemodinamia', ''),
-- (12, 'Rehabilitación', '');

INSERT INTO especialidad (nombre) VALUES
('Alergia e Inmunología'),
('Anestesiología Cardiovascular'),
('Cirugía Cabeza y Cuello'),
('Cirugía General <b>(guardia permanente)</b>'),
('Cirugía Infantil'),
('Cirugía Plástica Reparadora'),
('Cirugía Vascular'),
('Clínica Médica <b>(guardia permanente)</b>'),
('Columna'),
('Diabetes y Nutrición'),
('Dietología'),
('Dermatología'),
('Ecografías <b>(guardia permanente)</b>'),
('Endocrinología'),
('Especialista en Flebología'),
('Gastroenterología'),
('Ginecología y Obstetricia <b>(guardia permanente)</b>'),
('Hematología'),
('Infectología'),
('Nefrología'),
('Neumonología'),
('Neurocirugía'),
('Neurología'),
('Obstetricia'),
('Oftalmología'),
('Otorrinolaringología'),
('Patología Mamaria'),
('Pediatría <b>(guardia permanente)</b>'),
('Reumatología'),
('Traumatología <b>(guardia permanente)</b>'),
('Urología'),
('Cardiología'),
('Fonoaudilogía'),
('Cirugía Torácica'),
('Cardiología Infantil'),
('Oncología'),
('Fibrobroncospía');

INSERT INTO cobertura (nombre, imagen) VALUES
("Valmed", "valmed.png"),
("Suterh Osperyh", "suterh-osperyh.png"),
("Osrja", "osrja.png"),
("Ospiv", "ospiv.png"),
("Ioma", "ioma.png"),
("Cover Salud", "cover-salud.png"),
("Bristol Medicine", "bristol-medicine.png"),
("Asmepriv", "asmepriv.png"),
("Scientis Medical", "scientis-medical.jpg"),
("Ospjn", "ospjn.jpg"),
("Ospia", "ospia.jpg"),
("Ospeca", "ospeca.jpg"),
("Ospa", "ospa.jpg"),
("Osecac", "osecac.jpg"),
("Galeno", "galeno.jpg"),
("Ensalud", "ensalud.jpg"),
("Comisarios Navales", "comisarios-navales.jpg"),
("Circulo Medico Matanza", "circulo-medico-matanza.jpg"),
("Activa Salud", "activa-salud.jpg"),
("Osmecon", "osmecon.gif");

INSERT INTO servicio (nombre, descripcion, idJefeServicio) VALUES
("Servicio de Internación", "El servicio cuenta con 140 camas. Todas las camas están ubicadas en habitaciones con baño privado, aire acondiconado frío / calor de regulación individual, TV por cable en pantallas de LCD.", 1),
("Unidad de Terapia Intensiva Polivalente", "El Sanatorio cuenta con 19 camas destinadas a la Alta Complejidad Médica, esto es, Terapia Intensiva de Adultos, Unidad De Cuidados Especiales, Recuperación de Cirugía Cardiovascular.", 30),
("Centro Quirúrgico", "Contamos con cinco quirófanos de moderna tecnología en donde se realizan todo tipo de intervenciones quirúrgicas tanto ambulatorias como las que requieren internación.", 15),
("Servicio de Hemodinamia", "Cuenta con 1 salas de Hemodinamia de última generación con angiógrafo de alta resolución con detectores planos (Flat Detector) que permiten adquirir imágenes en forma digital de las arterias del corazón, sistema nervioso central y de la vasculatura periférica facilitando la realización de estudios diagnósticos y terapéuticos con imágenes de alta calidad. El área cuenta con sala de recuperación.", 2),
("Servicio de Cirugía Cardiovascular", "Contamos con una sala de recuperación perioperatoria especializada, con personal médico y paramédico altamente entrenado y un soporte multidiciplinario (Enfermería, Kinesiología, Nefrología, Infectología, Neumonología, etc) que nos permite ofrecerle una atención jerarquizada de acuerdo a las características individuales de cada paciente.", 3),
("Servicio de Diagnóstico por Imagen", "Cuenta con un sistema de Integración digital de todos sus equipos lo que permite, de forma ágil y sencilla, que los estudios realizados estén disponibles rápidamente en las diferentes áreas del sanatorio para que los médicos solicitantes puedan visualizarlos en forma inmediata a su realización.", 17),
("Servicio de Neurorehabilitación", "En nuestro centro de Neurorehabilitación ofrecemos y utilizamos diferentes métodos y tratamientos dependiendo del tipo de paciente. En el caso de las lesiones neurológicas el paciente pasa por una fase aguda en la cual necesita de unas atenciones médicas, a menudo hospitalarias, para estabilizarse clínicamente. Una vez superada esta fase, que pude durar desde unos meses hasta más de un año, el paciente puede retornar a su domicilio y es en ése momento donde
puede asistir al centro a fin de recibir rehabilitación de forma ambulatoria. Después la valoración inicial, que es realizada por todos los servicios, se planifica un plan de rehabilitación integral en nuestro centro. Mayoritariamente atendemos pacientes que han sufrido las siguientes afectaciones neurológicas: Traumatismo cráneo-encefálico, Lesiones medulares (traumáticas, tumorales, víricas…), Ictus (accidentes vasculares cerebrales), Patología tumoral cerebral, Encefalitis, Lesiones de plexos y de nervios periféricos, Parálisis cerebral, Enfermedades Neurodegenerativas.", 6),
("Servicio de Guardia", "La Guardia Externa cuenta con 5 amplios consultorios y funciona las 24hs los 365 días del año. Cuenta además con 6 puestos de Observación, 4 camas de hospital de día y Shock-room.", 31),
("Servicio de Hemodiálisis", "Contamos con una unidad a cargo de Fresenius Medical Care para el tratamiento de la Insuficiencia Renal Aguda en las unidades de terapia intensiva y en la sala de internación.", 32),
("Hospital de día Oncológico", "El hospital de dia oncológico es un espacio que cuenta con 4 plazas destinadas a realizar quimioterapia ambulatoria en modulos de 1, 3 y 6 hs. Cuenta con enfermeras especializadas en la administración de citostáticos.", 27),
("Unidad de Cuidados Especiales", "Este es el sitio cuenta con 8 camas con equipamiento de terapia internsiva para brindar una asistencia clínica que se desarrolla para la atención de aquellos pacientes, que padecen o pueden padecer, un compromiso severo de sus funciones vitales, allí encuentran un soporte adecuado y constante para restablecerlas.", 33),
("Laboratorio", "El laboratorio de análisis clínico se encuentra absolutamente robotizado e informatizado y son el resultado de la búsqueda constante de nuevas metodologías más sensibles, específicas y eficientes para procesar mayor volumen de muestras en el menor tiempo posible.", 23),
("Servicio de Rehabilitación Respiratoria", "En nuentro Centro de Rehabilitacion Repiratoria realizamos un programa multidiciplinario de asistencia al paciente con patología respiratoria crónica que se lleva a cabo de una forma individualizada intentando conseguir la mayor autonomía posible según la gravedad de la patología de base del paciente. Para lograr estas pautas realizamos ejercicio físico, tratamiento de aspecto psicosociales, educación del paciente y su familia. Atendemos Pacientes con EPOC, Insuficiencia Respiratoria, Internación subaguda de internación prolongada, Traqueostomizados.", 16);

INSERT INTO instalacion (nombre, imagen, descripcion, idServicio) VALUES
('Instalaciones internas', 'edificio-11.jpg', '', 4),
('Edificio 2', 'edificio-2.jpg', '', 4),
('edificio 3', 'edificio-3.jpg', '', 4),
('Consultorios', 'consultorios-1.jpg', '', 6),
('Consultorios 2', 'consultorios-2.jpg', '', 6),
('Equipamiento', 'equipamiento-tecnico-1.jpg', '', 7),
('Equipamiento 2', 'equipamiento-tecnico-2.jpg', '', 7),
('Equipamiento 3', 'equipamiento-tecnico-3.jpg', '', 7),
('Equipamiento 4', 'equipamiento-tecnico-4.jpg', '', 7),
('Equipamiento 5', 'equipamiento-tecnico-5.jpg', '', 7),
('Equipamiento 6', 'equipamiento-tecnico-6.jpg', '', 7),
('Equipamiento 7', 'equipamiento-tecnico-7.jpg', '', 7),
('Equipamiento 8', 'equipamiento-tecnico-9.jpg', '', 7),
('Equipamiento 10', 'equipamiento-tecnico-10.jpg', '', 7),
('Equipamiento 11', 'equipamiento-tecnico-11_1.jpg', '', 7),
('Equipamiento 12', 'equipamiento-tecnico-11_2.jpg', '', 7),
('Habitaciones', 'habitaciones-0.jpg', '', 3),
('Habitaciones 2', 'habitaciones-1.jpg', '', 3),
('Habitaciones 3', 'habitaciones-2.jpg', '', 3),
('Habitaciones 4', 'habitaciones-3.jpg', '', 3),
('Habitaciones 5', 'habitaciones-4.jpg', '', 3),
('Habitaciones 6', 'habitaciones-5.jpg', '', 3),
('Habitaciones 7', 'habitaciones-6.jpg', '', 3),
('Laboratorio', 'laboratorio-1.jpg', '', 8),
('Laboratorio 2', 'laboratorio-2.jpg', '', 8),
('Laboratorio 3', 'laboratorio-3.jpg', '', 8),
('Pediatría', 'pediatria-1.jpg', '', 9),
('Pediatría 2', 'pediatria-2.jpg', '', 9),
('Pediatría 3', 'pediatria-3.jpg', '', 9),
('Sala de espera', 'sala-de-espera-0_1.jpg', '', 1),
('Sala de espera 2', 'sala-de-espera-0_2.jpg', '', 1),
('Sala de espera 3', 'sala-de-espera-0.jpg', '', 1),
('Sala de espera 4', 'sala-de-espera-1.jpg', '', 1),
('Sala de espera 5', 'sala-de-espera-2.jpg', '', 1),
('Sala de espera 6', 'sala-de-espera-3.jpg', '', 1),
('Sala de espera 7', 'sala-de-espera-4.jpg', '', 1),
('Sala de espera 8', 'sala-de-espera-5.jpg', '', 1),
('Edificio 4', '2018-edificio-1.png', '', 4),
('Edificio 4', '2018-diagnostico-por-imagenes.jpg', '', 4),
('Maqueta del Edificio', '2018-edificio-maqueta.jpg', '', 1),
('Habitación', '2018-habitaciones-4.jpg', '', 3),
('Habitación', '2018-habitaciones-5.jpg', '', 3),
('Habitación', '2018-habitaciones-7.jpg', '', 3),
('Hemodialisis', '2018-hemodialisis.jpg', '', 10),
('Hemodinamia', '2018-hemodinamia-3.jpg', '', 11),
('Hemodinamia', '2018-hemodinamia-4.jpg', '', 11),
('Hospital de Día', '2018-hospital-de-dia.jpg', '', 1),
('Instalaciones', '2018-instalaciones-0.jpg', '', 1),
('Instalaciones', '2018-instalaciones-1.jpg', '', 1),
('Instalaciones', '2018-instalaciones-2.jpg', '', 1),
('Rehabiliatación', '2018-rehabiliatacion-4.jpg', '', 12),
('Rehabiliatación', '2018-rehabiliatacion-5.jpg', '', 12),
('Rehabiliatación', '2018-rehabiliatacion-6.jpg', '', 12),
('Terapia intensiva', '2018-terapia-intensiva.jpg', '', 1);

INSERT INTO usuario (nombre, usuario, pass) VALUES
('admin', 'admin', '$2y$10$KQtA15QKnavtmeIFOoqyFeOFL7APjWeTZXQBTMN5Hnxu6ukUujuOe');

INSERT INTO tipoXestudio (nombre, descripcion) VALUES
('Imágenes', ''),
('Laboratorio', '');

INSERT INTO estudio (nombre, descripcion, idTipo) VALUES
('Sangre de rutina', 'Ayuno de 8 horas. Durante el mismo sólo se puede tomar agua. Para el pedido de colesterol total o cualquiera de sus fracciones (HDL, LDL Y VLDL, triglicéridos) y hepatograma debe seguirse estrictamente la siguiente indicación: Ayuno de 12 horas.', 1),
('Orina completa', 'Se deberá recolectar la primera orina de la mañana en frasco estéril (no provisto por el Laboratorio). En su defecto, recolectar orina de 3 horas de retención mínima.', 1),
('Recolección de orina de 24 hs.', '
<ul>
  <li>
    Para la realización de los siguientes análisis, debe recolectarse la orina de 24 horas:
    <ul>
      <li>- Beta 2 microglobulina.</li>
      <li>- Calcio en orina Creatinina en orina.</li>
      <li>- Fosfato en orina Ionograma en orina.</li>
      <li>- Magnesio en orina.</li>
      <li>- Manganeso en orina.</li>
      <li>- Microalbuminuria.</li>
      <li>- Plomo en orina.</li>
      <li>- Porfirinas en orina (llamar al laboratorio para especificaciones).</li>
      <li>- Proteínas de Bence Jones.</li>
      <li>- Proteinuria Urea en orina.</li>
      <li>- Clearence en orina.</li>
    </ul>
  </li>
  <li>Para realizar este estudio destinar recipiente limpio y lavado (puede ser botella de agua mineral o cualquier recipiente adquirido en farmacia). Utilizar los recipientes que sean necesarios para toda la recolección.
  <li>Descartar la primera micción de la mañana.</li>
  <li>A partir de allí, juntar todo el volumen de todas las micciones hasta la misma hora del día siguiente, en la que se junta esa última micción.</li>
  <li>Los resultados serán informados por el volumen emitido, de allí la importancia de una adecuada recolección.</li>
  <li>Si Ud tiene dichos estudios conjuntamente con una extracción de sangre, el mismo día que finaliza la recolección de la orina, asistir al laboratorio con ayuno de 8 hs o 12 hs según corresponda.</li>
</ul>', 1
),
('Urocultivo', '
<ul>
  <li>Debe utilizar un recipiente estéril (comprado en farmacias) Este análisis debe realizarse recolectando la primera orina de la mañana o una orina con 3 horas de retención mínima, siguiendo las indicaciones de higiene previa mencionadas a posteriori y toma de muestra. Suspender todo tratamiento antibiótico 72 horas antes de la toma de muestra, salvo expresa indicación médica. No se aceptarán muestras derramadas.</li>
  <li>Hombres: Higienizarse con jabón desinfectante las manos y los genitales, retrayendo el prepucio. Enjuagar con abundante agua y secar con gasa estéril o toalla limpia sin uso. Debe descartar el primer chorro en el inodoro, continuar orinando dentro del recipiente. Desechar el último chorro fuera del recipiente nuevamente. Tapar el recipiente y remitir inmediatamente al laboratorio.</li>
  <li>Mujeres: Higienizarse con jabón desinfectante las manos y los genitales externos, no realizar lavajes internos. Enjuagar con abundante agua y secar con gasa estéril o toalla limpia sin uso. Colocar tampón vaginal. Separar con los dedos los labios de la vulva y orinar el primer chorro fuera del recipiente. Continuar orinando dentro del recipiente.Desechar el último chorro fuera del recipiente. Tapar el recipiente y remitir inmediatamente al laboratorio.</li>
  <li>Niños: En niños y niñas mayores la toma de muestra se realizará igual que para adultos. En niños y niñas que no controlan esfínteres se debe observar los hábitos miccionales del bebé. Higienizar con agua y jabón la zona genital y secar con gasa estéril. A las niñas, limpiar de adelante hacia atrás y a los niños, retrayendo el prepucio. Recolectar la orina dentro del recipiente (5 -10 cc) Tapar el recipiente y remitir inmediatamente al laboratorio. No son aptas las bolsas colectoras para realizar este estudio.</li>
  <li>Pacientes con sonda vesical: Higienizar la sonda con antiséptico y realizar punción de la sonda en la zona proximal de la salida de la uretra ,recolectarla con jeringa y colocarla en un frasco esteril.</li>
  <li>** CONSERVAR Y TRANSPORTAR REFRIGERADA HASTA EL LABORATORIO.</li>
  <li>** Rotular el frasco con NOBRE, APELLIDO Y EDAD.</li>
</ul>', 1
),
('Parasitológico seriado', '
<ul>
  <li>Debe utilizar un recipiente con formol al 5% suministrado por el laboratorio.</li>
  <li>No consumir aceites, vaselina, laxantes, ni medicamentos que contengan carbón.</li>
  <li>En caso de haberse sacado radiografías con ingestión de elementos de contraste (tipo solubar o similares), dejar pasar 3 días antes de empezar a juntar la muestra.</li>
  <li>Recolectar un poco de materia fecal emitida espontáneamente (del tamaño de una cucharada de té) de cada deposición diaria durante 7 días consecutivos. Si un día no hay deposiciones juntar un día más. Si hay varias deposiciones por día juntar de una sola.</li>
  <li>Conservar a temperatura ambiente y una vez finalizado remitir al laboratorio.</li>
<ul>
', 1),
('Test de Graham', '
<ul>
  <li>Debe utilizar un recipiente con formol al 5% suministrado por el laboratorio.</li>
  <li>La noche anterior NO lavar el ano con agua, ni colocar talco ni pomadas.</li>
  <li>No ir de cuerpo antes de realizar la toma de la muestra.</li>
  <li>A la mañana siguiente, al despertar y sin levantarse de la cama, con una gasita limpia que previamente habrá humedecido con solución fisiológica, limpiar el margen, los pliegues y la zona anal.</li>
  <li>Luego, colocar la gasita en el frasco.</li>
  <li>Realizar de idéntica forma durante 7 días consecutivos, guardando la gasa correspondiente por día y cerrando el frasco inmediatamente.</li>
  <li>Conservar a temperatura ambiente y una vez finalizado remitir al laboratorio.</li>
</ul>
', 1),
('Sangre oculta en materia fecal', '
<ul>
  <li>Debe utilizar un recipiente estéril, de boca ancha y seco (sin formol, comprado en farmacias).</li>
  <li>No tomar antibióticos 72 horas antes de tomar la muestra, salvo indicación médica.</li>
  <li>Colocar en el recipiente un trocito de material fecal del tamaño de una cuchara de té, o su equivalente en el caso de diarrea.</li>
  <li>Si existieran zonas con pus y/o sangre y/o cualquier otra cosa de aspecto raro o sospechoso, tomar el material de esa zona.</li>
  <li>Cerrar el recipiente y no volver a abrirlo.</li>
</ul>', 1),
('Ecografías', '
<ul>
  <li>De una deposición espontánea, colocar en un frasco limpio y seco una pequeña porción de materia fecal, tamaño cuchara de té. Esta muestra no debe tener contacto con la orina ni con ningún otro líquido.</li>
  <li>Guardar en heladera y remitirlo al laboratorio antes de las 24 hs de obtenida la muestra.</li>
  <li>No ingerir suplementos de hierro por vía oral 72 hs previas a la toma de la muestra.</li>
  <li>Evitar el sangrado de las encías al cepillarse los dientes.</li>
  <li>En caso de ser seriado de sangre oculta (según pedido médico) recoger una pequeña porción de materia fecal durante 3 días consecutivos en distintos recipientes plásticos, limpios y secos, rotulándolos como número 1, 2 y 3. Hasta remitir las muestras al laboratorio, mantenerlas refrigeradas.</li>
</ul>
', 2),
('Ecodoppler', '
<ul>
  <li>Abdominal: 8 hs de ayuno.</li>
  <li>Hepatobiliopancreática/HBP: 8hs de ayuno.</li>
  <li>Renal: Sin preparación.</li>
  <li>Vejiga y vías urinarias: tomar 1 litro de agua una hr antes del turno y retener.</li>
  <li>Renal y vesicoprostática: tomar 1 litro de agua una hr antes del turno y retener.</li>
  <li>Ginecológica o tocoginecológica: tomar 1 litro de agua una hr antes del turno y retener.</li>
  <li>Transrectal: 8 hs de ayuno, Realizar un enemol la noche anterior al estudio, Realizar un enemol 2hs antes del turno.</li>
</ul>', 2),
('Estudios seriados', '
<ul>
  <li>- Seriada Esófagogastroduodenal:
    <ul>
      <li>Día previo al examen: deberá comer liviano, sin grasas, sin picantes y nada de alcohol.</li>
      <li>Día del examen: presentarse con 8hs de ayuno total. Evite fumar. No tome ninguna medicación. Si no puede suspender alguna medicación debe tratar de ingerir las pastillas con la mínima cantidad de agua posible. Si la toma coincide con el horario del estudio deberá efectuarla después de terminado el mismo.</li>
      <li>Traer estudios previos de estómago y duodeno si los posee.</li>
      <li>Indicaciones posteriores a la realización del estudios: Tomar 2 litros de agua por día e ingerir una cucharada de leche de magnesia con la cena durante los tres días subsiguientes.</li>
    </ul>
  </li>

  <li>- Videodeglución: presentarse con 8 hs de ayuno total.
    <ul>
      <li>Traer:</li>
      <li>- 2 rebanadas de pan lactal o vainillas.</li>
      <li>- 1 yogurt firme de vainilla o frutilla.</li>
      <li>- 1 cucharita descartable.</li>
      <li>- 1 dvd marca Sony.</li>
      <li>- Cistouretrografía: No hacer ayuno.</li>
    <ul>
  </li>

  <ul>
    <li>Traer:</li>
    <li>- Análisis de urocultivo negativo de no más de 15 días de realizado.</li>
    <li>- 2 toallas de mano.</li>
    <li>- Histerosalpingografía: Llamar o concurrir para la solicitud del turno el primer día del ciclo femenino. El turno se le asignará entre el séptimo y el décimo día de su ciclo (según disponibilidad).</li>
    <li>Día del examen: 4hs. de ayuno, Abstinencia sexual desde el primer día del ciclo menstrual. -No tomar Cafiaspirina, Bayaspirina ni antiinflamatorios.</li>
  </ul>

  <ul>
    <li>Traer:</li>
    <li>- Apósitos.</li>
    <li>- Toallón.</li>
    <li>- Estudios anteriores.</li>
  </ul>
</ul>', 2),
('Punción de tiroides', '
<ul>
  <li>7 días antes no debe ingerir aspirinas ni antiinflamatorios. En el caso de pacientes con tratamientos de aspirinas (pacientes con patologías cardíacas) deben suspender su uso 3 días antes del estudio.</li>
  <li>El día del estudio debe concurrir al mismo con 5hs de ayuno.</li>
  <li>Traer estudios anteriores.</li>
  <li>Traer resultado del tiempo de coagulación realizado dentro del mes.</li>
</ul>', 2);
