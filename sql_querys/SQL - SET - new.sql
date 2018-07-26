USE clinicaloscedros;

INSERT INTO cargo (nombre) VALUES
("Doctor"), /* 1 */
("Doctora"), /* 2 */

("Señor"), /* 3 */
("Señora"), /* 4 */

("Jefe"), /* 5 */
("Jefa"), /* 6 */

("Licenciado"), /* 7 */
("Licenciada"), /* 8 */

("Empleado"), /* 9 */
("Empleada"), /* 10 */

("Administración"), /* 11 */
("Gerencia"), /* 12 */
("Dirección"), /* 13 */
("Coordinación"), /* 14 */

("Director"), /* 15 */
("Directora"); /* 16 */

INSERT INTO sector (nombre) VALUES
("General"), /* 1 */
("Departamento Médico"), /* 2 */
("Sector Administrativo"), /* 3 */
("Recursos Humanos"), /* 4 */
("Terapia Intensiva"), /* 5 */
("Emergencias"), /* 6 */
("Kinesiología"); /* 7 */

INSERT INTO jefe_sector (idEmpleado, idCargo, idSector) VALUES
(52, 13, 1), /* "Director General"), */
(18, 13, 2), /* "Director Médico"), */
(87, 13, 3), /* "Director Administrativo"), */
(88, 6, 4), /* "Jefa de Recursos Humanos"), No lo se */
(23, 12, 2), /* "Gerencia Médica"), */
(89, 14, 1), /* "Coordinación General"), */
(90, 14, 5), /* "Coordinación de Terapia Intensiva"), */
(91, 6, 6), /* "Jefa de Servicio de Emergencias"); */
(108, 5, 7); /* "Servicio de Kinesiología"), */

INSERT INTO servicio (nombre, descripcion) VALUES
/* 1 */ ("Servicio de Internación", "El servicio cuenta con 140 camas. Todas las camas están ubicadas en habitaciones con baño privado, aire acondiconado frío / calor de regulación individual, TV por cable en pantallas de LCD."),
/* 2 */ ("Unidad de Terapia Intensiva Polivalente", "El Sanatorio cuenta con 19 camas destinadas a la Alta Complejidad Médica, esto es, Terapia Intensiva de Adultos, Unidad De Cuidados Especiales, Recuperación de Cirugía Cardiovascular."),
/* 3 */ ("Centro Quirúrgico", "Contamos con cinco quirófanos de moderna tecnología en donde se realizan todo tipo de intervenciones quirúrgicas tanto ambulatorias como las que requieren internación."),
/* 4 */ ("Servicio de Hemodinamia", "Cuenta con 1 salas de Hemodinamia de última generación con angiógrafo de alta resolución con detectores planos (Flat Detector) que permiten adquirir imágenes en forma digital de las arterias del corazón, sistema nervioso central y de la vasculatura periférica facilitando la realización de estudios diagnósticos y terapéuticos con imágenes de alta calidad. El área cuenta con sala de recuperación."),
/* 5 */ ("Servicio de Cirugía Cardiovascular", "Contamos con una sala de recuperación perioperatoria especializada, con personal médico y paramédico altamente entrenado y un soporte multidiciplinario (Enfermería, Kinesiología, Nefrología, Infectología, Neumonología, etc) que nos permite ofrecerle una atención jerarquizada de acuerdo a las características individuales de cada paciente."),
/* 6 */ ("Servicio de Diagnóstico por Imagen", "Cuenta con un sistema de Integración digital de todos sus equipos lo que permite, de forma ágil y sencilla, que los estudios realizados estén disponibles rápidamente en las diferentes áreas del sanatorio para que los médicos solicitantes puedan visualizarlos en forma inmediata a su realización."),
/* 7 */ ("Servicio de Neurorehabilitación", "En nuestro centro de Neurorehabilitación ofrecemos y utilizamos diferentes métodos y tratamientos dependiendo del tipo de paciente. En el caso de las lesiones neurológicas el paciente pasa por una fase aguda en la cual necesita de unas atenciones médicas, a menudo hospitalarias, para estabilizarse clínicamente. Una vez superada esta fase, que pude durar desde unos meses hasta más de un año, el paciente puede retornar a su domicilio y es en ése momento donde puede asistir al centro a fin de recibir rehabilitación de forma ambulatoria. Después la valoración inicial, que es realizada por todos los servicios, se planifica un plan de rehabilitación integral en nuestro centro. Mayoritariamente atendemos pacientes que han sufrido las siguientes afectaciones neurológicas: Traumatismo cráneo-encefálico, Lesiones medulares (traumáticas, tumorales, víricas…), Ictus (accidentes vasculares cerebrales), Patología tumoral cerebral, Encefalitis, Lesiones de plexos y de nervios periféricos, Parálisis cerebral, Enfermedades Neurodegenerativas."),
/* 8 */ ("Servicio de Guardia", "La Guardia Externa cuenta con 5 amplios consultorios y funciona las 24hs los 365 días del año. Cuenta además con 6 puestos de Observación, 4 camas de hospital de día y Shock-room."),
/* 9 */ ("Servicio de Hemodiálisis", "Contamos con una unidad a cargo de Fresenius Medical Care para el tratamiento de la Insuficiencia Renal Aguda en las unidades de terapia intensiva y en la sala de internación."),
/* 10 */ ("Hospital de día Oncológico", "El hospital de dia oncológico es un espacio que cuenta con 4 plazas destinadas a realizar quimioterapia ambulatoria en modulos de 1, 3 y 6 hs. Cuenta con enfermeras especializadas en la administración de citostáticos."),
/* 11 */ ("Unidad de Cuidados Especiales", "Este es el sitio cuenta con 8 camas con equipamiento de terapia internsiva para brindar una asistencia clínica que se desarrolla para la atención de aquellos pacientes, que padecen o pueden padecer, un compromiso severo de sus funciones vitales, allí encuentran un soporte adecuado y constante para restablecerlas."),
/* 12 */ ("Laboratorio", "El laboratorio de análisis clínico se encuentra absolutamente robotizado e informatizado y son el resultado de la búsqueda constante de nuevas metodologías más sensibles, específicas y eficientes para procesar mayor volumen de muestras en el menor tiempo posible."),
/* 13 */ ("Servicio de Rehabilitación Respiratoria", "En nuentro Centro de Rehabilitacion Repiratoria realizamos un programa multidiciplinario de asistencia al paciente con patología respiratoria crónica que se lleva a cabo de una forma individualizada intentando conseguir la mayor autonomía posible según la gravedad de la patología de base del paciente. Para lograr estas pautas realizamos ejercicio físico, tratamiento de aspecto psicosociales, educación del paciente y su familia. Atendemos Pacientes con EPOC, Insuficiencia Respiratoria, Internación subaguda de internación prolongada, Traqueostomizados.");

INSERT INTO jefe_servicio (idEmpleado, idCargo, idServicio, idEspecialidad) VALUES
/* 1 */ (52, 5, 1, null), /* "Servicio de Internación"), */
/* 2 */ (92, 5, 4, null), /* "Servicio de Hemodinamia"), */
/* 3 */ (64, 5, 5, null), /* "Servicio de Cirugía Cardiovascular"), */
/* 4 */ (93, 5, null, 32), /* "Servicio de Cardiología"), */
/* 5 */ (51, 5, null, 19), /* "Servicio de Infectología"), */
/* 6 */ (94, 5, 7, null), /* "Servicio de Rehabilitación"), */
/* 7 */ (28, 5, null, 17), /* "Servicio de Ginecología y Obstetricia"), */
/* 8 */ (95, 5, null, 28), /* "Servicio de Pediatría"), */
/* 9 */ (96, 5, null, 41), /* "Servicio de Hemoterapia"), */
/* 10 */ (56, 5, null, 23), /* "Servicio de Neurología"), */
/* 11 */ (98, 5, null, 3), /* "Servicio de Cirugía de Cabeza y Cuello"), */
/* 12 */ (99, 5, null, 6), /* "Servicio de Cirugía Plástica"), */
/* 13 */ (37, 5, null, 26), /* "Servicio Otorrinolaringología"), */
/* 14 */ (100, 5, null, 22), /* "Servicio de Neurocirugía"), */
/* 15 */ (18, 5, 3, null), /* "Servicio de Cirugía"), */
/* 16 */ (23, 5, 13, null), /* "Servicio de Neumonología"), */
/* 17 */ (101, 5, 6, null), /* "Servicio de Diagnóstico por Imagen"), */
/* 18 */ (9, 5, null, 31), /* "Servicio de Urología"), */
/* 19 */ (44, 5, null, 30), /* "Servicio de Traumatología"), */
/* 20 */ (102, 5, null, 30), /* "Servicio de Traumatología"), */
/* 21 */ (50, 5, null, 29), /* "Servicio de Reumatología"), */
/* 22 */ (60, 5, null, 40), /* "Cirugía de Torax"), */
/* 23 */ (97, 5, 12, null), /* "Servicio de Laboratorio"), */
/* 24 */ (104, 5, null, 39), /* "Servicio de Bacteriología"), */
/* 25 */ (105, 5, null, 38), /* "Servicio de Endoscopía Digestiva"), */
/* 26 */ (106, 5, null, 38), /* "Servicio de Endoscopía Digestiva"), */
/* 27 */ (63, 5, 10, null), /* "Servicio de Oncología"), */
/* 28 */ (107, 5, null, 37), /* "Servicio de Fibrobroncoscopía"), */
/* 29 */ (89, 5, 2, null), /* "Terapia Intensiva"), */
/* 30 */ (91, 5, 8, null), /* "Servicio de Guardia"), */
/* 31 */ (62, 5, 9, null), /* "Servicio de Hemodiálisis"), */
/* 32 */ (90, 5, 11, null); /* "Unidad de Cuidados Especiales"); */

INSERT INTO especialidad (nombre) VALUES
/* 1 */('Alergia e Inmunología'),
/* 2 */('Anestesiología Cardiovascular'),
/* 3 */('Cirugía Cabeza y Cuello'),
/* 4 */('Cirugía General <b>(guardia permanente)</b>'),
/* 5 */('Cirugía Infantil'),
/* 6 */('Cirugía Plástica Reparadora'),
/* 7 */('Cirugía Vascular'),
/* 8 */('Clínica Médica <b>(guardia permanente)</b>'),
/* 9 */('Columna'),
/* 10 */('Diabetes y Nutrición'),
/* 11 */('Dietología'),
/* 12 */('Dermatología'),
/* 13 */('Ecografías <b>(guardia permanente)</b>'),
/* 14 */('Endocrinología'),
/* 15 */('Especialista en Flebología'),
/* 16 */('Gastroenterología'),
/* 17 */('Ginecología y Obstetricia <b>(guardia permanente)</b>'),
/* 18 */('Hematología'),
/* 19 */('Infectología'),
/* 20 */('Nefrología'),
/* 21 */('Neumonología'),
/* 22 */('Neurocirugía'),
/* 23 */('Neurología'),
/* 24 */('Obstetricia'),
/* 25 */('Oftalmología'),
/* 26 */('Otorrinolaringología'),
/* 27 */('Patología Mamaria'),
/* 28 */('Pediatría <b>(guardia permanente)</b>'),
/* 29 */('Reumatología'),
/* 30 */('Traumatología <b>(guardia permanente)</b>'),
/* 31 */('Urología'),
/* 32 */('Cardiología'),
/* 33 */('Fonoaudilogía'),
/* 34 */('Cirugía Torácica'),
/* 35 */('Cardiología Infantil'),
/* 36 */('Oncología'),
/* 37 */('Fibrobroncoscopía'),
/* 38 */('Endoscopía Digestiva'),
/* 39 */('Bacteriología'),
/* 40 */('Cirugía de Torax'),
/* 41 */('Hemoterapia');

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

INSERT INTO usuario (nombre, usuario, pass) VALUES
('admin', 'admin', '$2y$10$KQtA15QKnavtmeIFOoqyFeOFL7APjWeTZXQBTMN5Hnxu6ukUujuOe');

INSERT INTO tipoXestudio (nombre, descripcion) VALUES
('Laboratorio', ''),
('Imágenes', '');

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
('Coprocultivo', '
<ul>
  <li>Debe utilizar un recipiente estéril, de boca ancha y seco (sin formol, comprado en farmacias).</li>
  <li>No tomar antibióticos 72 horas antes de tomar la muestra, salvo indicación médica.</li>
  <li>Colocar en el recipiente un trocito de material fecal del tamaño de una cuchara de té, o su equivalente en el caso de diarrea.</li>
  <li>Si existieran zonas con pus y/o sangre y/o cualquier otra cosa de aspecto raro o sospechoso, tomar el material de esa zona.</li>
  <li>Cerrar el recipiente y no volver a abrirlo.</li>
</ul>', 1),
('Sangre oculta en materia fecal', '
<ul>
  <li>De una deposición espontánea, colocar en un frasco limpio y seco una pequeña porción de materia fecal, tamaño cuchara de té. Esta muestra no debe tener contacto con la orina ni con ningún otro líquido.</li>
  <li>Guardar en heladera y remitirlo al laboratorio antes de las 24 hs de obtenida la muestra.</li>
  <li>No ingerir suplementos de hierro por vía oral 72 hs previas a la toma de la muestra.</li>
  <li>Evitar el sangrado de las encías al cepillarse los dientes.</li>
  <li>En caso de ser seriado de sangre oculta (según pedido médico) recoger una pequeña porción de materia fecal durante 3 días consecutivos en distintos recipientes plásticos, limpios y secos, rotulándolos como número 1, 2 y 3. Hasta remitir las muestras al laboratorio, mantenerlas refrigeradas.</li>
</ul>
', 1),
('Ecografías', '
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
</ul>', 2),
('Ecodoppler', '
<li><b>Árbol esplénico portal:</b> 8hs de ayuno</li>
<li><b>Aorta abdominal:</b> 8hs de ayuno.</li>
<li><b>Aorta ilíaca:</b> 8hs de ayuno.</li>
<li><b>Hepático:</b> 8hs de ayuno.</li>
<li><b>Renal:</b> Durante las 72hs previas al estudio tomar Factor AG comprimidos 1 cada 8 hs (3 por día).
<br/>
<br/>
Régimen a realizar los 3 días previos al examen:
<li><b>Desayuno y merienda:</b> Te con edulcorante. Galletitas de agua con queso petit suisse o ricota.</li>
<li><b>Almuerzo y cena:</b> Caldo de verduras coladas o cubitos, sopa de sémola. Puré de zapallo y zanahoria. Zapallitos hervidos. Jamón, huevo pasado por agua. Pescado hervido o asado. Pollo hervido sin piel o asado. Carne vacuna magra a la parrilla o plancha.</li>
<li><b>Postres:</b> manzana asada, rallada o en puré. Pera cocida sin azucar.</li>
<li><b>Bebidas:</b> agua mineral, agua de compota.</li>
<li><b>No ingerir:</b> café, mate ni alcohol.</li>
<li><b>Importante:</b> concurrir con 8hs de ayuno y traer estudios anteriores.</li>
', 2);
