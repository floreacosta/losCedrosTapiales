USE clinicaloscedros;

INSERT INTO jefe_sector (id, idEmpleado, cargo) VALUES
(1, 86, "Director General"),
(2, 17, "Director Médico"),
(3, 87, "Director Administrativo"),
(4, 88, "Jefa de Recursos Humanos"),
(5, 22, "Gerencia Médica"),
(6, 89, "Coordinación General"),
(7, 90, "Coordinación de Terapia Intensiva"),
(8, 91, "Jefa de Servicio de Emergencias");

INSERT INTO jefe_servicio (id, idEmpleado, cargo) VALUES
(9, 92, "Jefe de Servicio de Hemodinamia"),
(10, 63, "Jefe de Servicio de Cirugía Cardiovascular"),
(11, 93, "Jefe De Servicio de Cardiología"),
(12, 50, "Jefe de Servicio de Infectología"),
(13, 94, "Jefe de Servicio de Rehabilitación"),
(14, 27, "Jefe de Servicio de Ginecología y Obstetricia"),
(15, 95, "Jefe de Servicio de Pediatría"),
(16, 96, "Jefe de Servicio de Hemoterapia"),
(17, 55, "Jefe de Servicio de Neurología"),
(18, 100, "Jefe de Servicio de Neurocirugía"),
(19, 17, "Jefe de Servicio de Cirugía"),
(20, 22, "Jefe de Servicio de Neumonología"),
(21, 101, "Jefe de Servicio de Diagnóstico por Imagen"),
(22, 8, "Jefe de Servicio de Urología"),
(23, 43, "Jefe de Servicio de Traumatología"),
(24, 102, "Jefe de Servicio de Traumatología"),
(25, 59, "Jefe de Cirugía de Torax"),
(26, 97, "Jefe de Servicio de Laboratorio", ''),
(27, 104, "Jefe de Servicio de Bacteriología"),
(28, 105, "Jefe de Servicio de Endoscopía Digestiva"),
(29, 106, "Jefe de Servicio de Endoscopía Digestiva"),
(30, 62, "Jefe de Servicio de Oncología"),
(31, 107, "Jefe de Servicio de Fibrobroncoscopía"),
(32, 108, "Jefe de Servicio de Kinesiología"),
(33, 98, "Jefe de Servicio de Cirugía de Cabeza y Cuello"),
(34, 99, "Jefe de Servicio de Cirugía Plástica"),
(35, 36, "Jefe de Servicio Otorrinolaringología"),
(36, 49, "Jefe de Servicio de Reumatología");

INSERT INTO doctor (id, idEmpleado) VALUES
(0, 0),
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80),
(81, 81),
(82, 82),
(83, 83),
(84, 84),
(85, 85),
(86, 89),
(87, 90),
(88, 91),
(89, 92),
(90, 93),
(91, 94),
(92, 95),
(93, 96),
(94, 97);
(95, 98),
(96, 99),
(97, 100),
(98, 101),
(99, 102),
(100, 103),
(101, 104),
(102, 105),
(103, 106),
(104, 107);

INSERT INTO categoria (id, nombre, descripcion) VALUES
(1, 'Sala de espera', 'Áreas de internación con amplia iluminación y cómoda accesibilidad para todo tipo de pacientes.'),
(3, 'Habitaciones', 'Las suites de internación disponen con aire acondicionado, televisión satelital, Wifi y comodidades para acompañantes.'),
(4, 'Edificio', 'Clínica Los Cedros de tapiales ofrece una infraestructura de de 4 plantas totalmente renovados.\r\nPosee 5 sectores de internación clínica, quirúrgica y de obstetricia.'),
(6, 'Consultorios', 'Consultorios equipados con tecnología de última generación requerida por cada especialidad, contando con equipamiento ginecológico, cardiológico, kinesiológico, etc.'),
(7, 'Equipamiento técnico', 'Equipamiento de primera. Área con nuevo tomógrafo helicoideal funcionando las 24hs.'),
(8, 'Laboratorio', 'Laboratorio equipado con tecnología moderna, realizando análisis clínicos y bacteriológicos.'),
(9, 'Pediatría', 'Guardias pediátricas equipadas con juegos y entretenimientos para los más chicos.');

INSERT INTO especialidad (id, nombre) VALUES
(1, 'Alergia y Inmunología'),
(2, 'Anestesiología Cardiovascular'),
(3, 'Cirugía Cabeza y Cuello'),
(4, 'Cirugía General <b>(guardia permanente)</b>'),
(5, 'Cirugía Infantil'),
(6, 'Cirugía Plástica Reparadora'),
(7, 'Cirugía Vascular'),
(8, 'Clínica Médica <b>(guardia permanente)</b>'),
(9, 'Columna'),
(10, 'Diabetes y Nutrición'),
(11, 'Dietología'),
(12, 'Dermatología'),
(13, 'Ecografías <b>(guardia permanente)</b>'),
(14, 'Endocrinología'),
(15, 'Especialista en Flebología'),
(16, 'Gastroenterología'),
(17, 'Ginecología y obstetricia <b>(guardia permanente)</b>'),
(18, 'Hematología'),
(19, 'Infectología'),
(20, 'Nefrología'),
(21, 'Neumonología'),
(22, 'Neurocirugía'),
(23, 'Neurología'),
(24, 'Obstetricia'),
(25, 'Oftalmología'),
(26, 'Otorrinolaringología'),
(27, 'Patología Mamaria'),
(28, 'Pediatría <b>(guardia permanente)</b>'),
(29, 'Reumatología'),
(30, 'Traumatología <b>(guardia permanente)</b>'),
(31, 'Urología'),
(32, 'Cardiología'),
(33, 'Fonoaudilogía'),
(34, 'Cirugía Torácica'),
(35, 'Cardiología Infantil'),
(36, 'Oncología'),
(37, 'Fibrobroncospía');

INSERT INTO cobertura (id, nombre, imagen) VALUES
(1, "Valmed", "valmed.png"),
(2, "Suterh Osperyh", "suterh-osperyh.png"),
(3, "Osrja", "osrja.png"),
(4, "Ospiv", "ospiv.png"),
(5, "Ioma", "ioma.png"),
(6, "Cover Salud", "cover-salud.png"),
(7, "Bristol Medicine", "bristol-medicine.png"),
(8, "Asmepriv", "asmepriv.png"),
(9, "Scientis Medical", "scientis-medical.jpg"),
(10, "Ospjn", "ospjn.jpg"),
(11, "Ospia", "ospia.jpg"),
(12, "Ospeca", "ospeca.jpg"),
(13, "Ospa", "ospa.jpg"),
(14, "Osecac", "osecac.jpg"),
(15, "Galeno", "galeno.jpg"),
(16, "Ensalud", "ensalud.jpg"),
(17, "Comisarios Navales", "comisarios-navales.jpg"),
(18, "Circulo Medico Matanza", "circulo-medico-matanza.jpg"),
(19, "Activa Salud", "activa-salud.jpg"),
(20, "Osmecon", "osmecon.gif");

INSERT INTO servicio (id, nombre, descripcion, idDoctor) VALUES
(1, "Servicio de Guardia", "La Guardia Externa cuenta con 5 amplios consultorios y funciona las 24hs los 365 días del año. Cuenta además con 6 puestos de Observación, 4 camas de hospital de día y Shock-room.", 88),
(2, "Servicio de Internación", "El servicio cuenta con 140 camas. Todas las camas están ubicadas en habitaciones con baño privado, aire acondiconado frío / calor de regulación individual, TV por cable en pantallas de LCD.", 86),
(3, "Terapia Intensiva Polivalente", "El Sanatorio cuenta con 26 camas destinadas a la Alta Complejidad Médica, esto es, Terapia Intensiva de Adultos, Unidad De Cuidados Especiales, Recuperación de Cirugía Cardiovascular.", 87),
(4, "Unidad de Cuidados Especiales", "", 0),
(5, "Centro Quirúrgico", "Contamos con cinco quirófanos de moderna tecnología en donde se realizan todo tipo de intervenciones quirúrgicas tanto ambulatorias como las que requieren internación.", 17),
(6, "Servicio de Hemodinamia", "Cuenta con 1 salas de Hemodinamia de última generación con angiógrafo de alta resolución con detectores planos (Flat Detector) que permiten adquirir imágenes en forma digital de las arterias del corazón, sistema nervioso central y de la vasculatura periférica facilitando la realización de estudios diagnósticos y terapéuticos con imágenes de alta calidad. El área cuenta con sala de recuperación.", 89),
(7, "Servicio de Cirugía Cardiovascular", "Contamos con una sala de recuperación perioperatoria especializada, con personal médico y paramédico altamente entrenado y un soporte multidiciplinario (Enfermería, Kinesiología, Nefrología, Infectología, Neumonología, etc) que nos permite ofrecerle una atención jerarquizada de acuerdo a las características individuales de cada paciente.", 63),
(8, "Servicio de Neurorehabilitación", "En nuestro centro de Neurorehabilitación ofrecemos y utilizamos diferentes métodos y tratamientos dependiendo del tipo de paciente. En el caso de las lesiones neurológicas el paciente pasa por una fase aguda en la cual necesita de unas atenciones médicas, a menudo hospitalarias, para estabilizarse clínicamente. Una vez superada esta fase, que pude durar desde unos meses hasta más de un año, el paciente puede retornar a su domicilio y es en ése momento donde puede asistir al centro a fin de recibir rehabilitación de forma ambulatoria. Después la valoración inicial, que es realizada por todos los servicios, se planifica un plan de rehabilitación integral en nuestro centro. Mayoritariamente atendemos pacientes que han sufrido las siguientes afectaciones neurológicas: Traumatismo cráneo-encefálico, Lesiones medulares (traumáticas, tumorales, víricas…), Ictus (accidentes vasculares cerebrales), Patología tumoral cerebral, Encefalitis, Lesiones de plexos y de nervios periféricos, Parálisis cerebral, Enfermedades Neurodegenerativas.", 91),
(9, "Servicio de Diagnóstico por Imagen", "Cuenta con un sistema de Integración digital de todos sus equipos lo que permite, de forma ágil y sencilla, que los estudios realizados estén disponibles rápidamente en las diferentes áreas del sanatorio para que los médicos solicitantes puedan visualizarlos en forma inmediata a su realización.", 101),
(10, "Laboratorio", "El laboratorio de análisis clínico se encuentra absolutamente robotizado e informatizado y son el resultado de la búsqueda constante de nuevas metodologías más sensibles, específicas y eficientes para procesar mayor volumen de muestras en el menor tiempo posible.", 94);
-- (11, "Servicio de Radiología", "Estudios simples y contrastados con guardias permanentes las 24 hs.", 30),
(12, "Servicio de Hemodiálisis", "", 16);

INSERT INTO instalacion (id, nombre, imagen, descripcion, idCategoria) VALUES
(1, 'Instalaciones internas', 'edificio-11.jpg', '', 4),
(2, 'Edificio 2', 'edificio-2.jpg', '', 4),
(3, 'edificio 3', 'edificio-3.jpg', '', 4),
(4, 'Consultorios', 'consultorios-1.jpg', '', 6),
(5, 'Consultorios 2', 'consultorios-2.jpg', '', 6),
(6, 'Equipamiento', 'equipamiento-tecnico-1.jpg', '', 7),
(7, 'Equipamiento 2', 'equipamiento-tecnico-2.jpg', '', 7),
(8, 'Equipamiento 3', 'equipamiento-tecnico-3.jpg', '', 7),
(11, 'Equipamiento 4', 'equipamiento-tecnico-4.jpg', '', 7),
(12, 'Equipamiento 5', 'equipamiento-tecnico-5.jpg', '', 7),
(13, 'Equipamiento 6', 'equipamiento-tecnico-6.jpg', '', 7),
(14, 'Equipamiento 7', 'equipamiento-tecnico-7.jpg', '', 7),
(16, 'Equipamiento 8', 'equipamiento-tecnico-9.jpg', '', 7),
(17, 'Equipamiento 10', 'equipamiento-tecnico-10.jpg', '', 7),
(18, 'Equipamiento 11', 'equipamiento-tecnico-11_1.jpg', '', 7),
(19, 'Equipamiento 12', 'equipamiento-tecnico-11_2.jpg', '', 7),
(20, 'Habitaciones', 'habitaciones-0.jpg', '', 3),
(21, 'Habitaciones 2', 'habitaciones-1.jpg', '', 3),
(22, 'Habitaciones 3', 'habitaciones-2.jpg', '', 3),
(23, 'Habitaciones 4', 'habitaciones-3.jpg', '', 3),
(24, 'Habitaciones 5', 'habitaciones-4.jpg', '', 3),
(25, 'Habitaciones 6', 'habitaciones-5.jpg', '', 3),
(26, 'Habitaciones 7', 'habitaciones-6.jpg', '', 3),
(27, 'Laboratorio', 'laboratorio-1.jpg', '', 8),
(28, 'Laboratorio 2', 'laboratorio-2.jpg', '', 8),
(29, 'Laboratorio 3', 'laboratorio-3.jpg', '', 8),
(30, 'Pediatría', 'pediatria-1.jpg', '', 9),
(31, 'Pediatría 2', 'pediatria-2.jpg', '', 9),
(32, 'Pediatría 3', 'pediatria-3.jpg', '', 9),
(33, 'Sala de espera', 'sala-de-espera-0_1.jpg', '', 1),
(34, 'Sala de espera 2', 'sala-de-espera-0_2.jpg', '', 1),
(35, 'Sala de espera 3', 'sala-de-espera-0.jpg', '', 1),
(36, 'Sala de espera 4', 'sala-de-espera-1.jpg', '', 1),
(37, 'Sala de espera 5', 'sala-de-espera-2.jpg', '', 1),
(38, 'Sala de espera 6', 'sala-de-espera-3.jpg', '', 1),
(39, 'Sala de espera 7', 'sala-de-espera-4.jpg', '', 1),
(40, 'Sala de espera 8', 'sala-de-espera-5.jpg', '', 1);

INSERT INTO usuario (id, nombre, usuario, pass) VALUES
(1, 'admin', 'admin', '$2y$10$KQtA15QKnavtmeIFOoqyFeOFL7APjWeTZXQBTMN5Hnxu6ukUujuOe');

INSERT INTO doctorXEspecialidad (id, idEspecialidad, idDoctor) VALUES
(18, 32, 1),
(19, 32, 2),
(20, 32, 3),
(21, 32, 4),
(22, 32, 5),
(23, 32, 6),
(24, 24, 7),
(25, 31, 8),
(26, 31, 9),
(27, 31, 10),
(28, 31, 11),
(29, 31, 12),
(30, 1, 13),
(31, 1, 14),
(32, 4, 15),
(33, 4, 16),
(34, 4, 17),
(35, 4, 18),
(36, 4, 19),
(37, 4, 20),
(38, 4, 21),
(39, 21, 22),
(40, 21, 23),
(41, 21, 24),
(42, 17, 25),
(43, 17, 26),
(44, 17, 27),
(45, 17, 28),
(46, 17, 29),
(47, 17, 30),
(48, 28, 31),
(49, 28, 32),
(50, 10, 33),
(51, 10, 34),
(52, 10, 35),
(53, 26, 37),
(54, 26, 36),
(56, 14, 38),
(57, 14, 39),
(58, 10, 40),
(59, 25, 41),
(60, 30, 42),
(61, 30, 43),
(62, 30, 44),
(63, 30, 45),
(64, 30, 46),
(65, 30, 47),
(66, 30, 48),
(67, 29, 49),
(68, 19, 50),
(69, 8, 51),
(70, 8, 52),
(71, 8, 53),
(72, 23, 54),
(73, 23, 55),
(74, 23, 56),
(75, 33, 57),
(77, 35, 58),
(78, 20, 60),
(79, 20, 61),
(80, 36, 62),
(81, 7, 63),
(82, 7, 64),
(83, 12, 65),
(84, 12, 66),
(85, 12, 67),
(86, 22, 68),
(87, 22, 69),
(88, 22, 70),
(89, 10, 71),
(90, 10, 72),
(91, 10, 73),
(92, 10, 74),
(93, 18, 75),
(94, 18, 76),
(95, 18, 77),
(96, 37, 78),
(97, 3, 79),
(98, 3, 80),
(99, 6, 81),
(100, 16, 82),
(101, 16, 83),
(102, 16, 84),
(103, 5, 85);

INSERT INTO tipoXestudio (id, nombre, descripcion) VALUES
(1, 'Imágenes', ''),
(2, 'Laboratorio', '');

INSERT INTO estudio (id, nombre, descripcion, idTipo) VALUES
(1, 'Sangre de rutina', 'Ayuno de 8 horas. Durante el mismo sólo se puede tomar agua. Para el pedido de colesterol total o cualquiera de sus fracciones (HDL, LDL Y VLDL, triglicéridos) y hepatograma debe seguirse estrictamente la siguiente indicación: Ayuno de 12 horas.', 1),
(2, 'Orina completa', 'Se deberá recolectar la primera orina de la mañana en frasco estéril (no provisto por el Laboratorio). En su defecto, recolectar orina de 3 horas de retención mínima.', 1),
(3, 'Recolección de orina de 24 hs', '
Para la realización de los siguientes análisis, debe recolectarse la orina de 24 horas:
- Beta 2 microglobulina.
- Calcio en orina Creatinina en orina.
- Fosfato en orina Ionograma en orina.
- Magnesio en orina.
- Manganeso en orina.
- Microalbuminuria.
- Plomo en orina.
- Porfirinas en orina (llamar al laboratorio para especificaciones).
- Proteínas de Bence Jones.
- Proteinuria Urea en orina.
- Clearence en orina.
Para realizar este estudio destinar recipiente limpio y lavado (puede ser botella de agua mineral o cualquier recipiente adquirido en farmacia). Utilizar los recipientes que sean necesarios para toda la recolección.
Descartar la primera micción de la mañana.
A partir de allí, juntar todo el volumen de todas las micciones hasta la misma hora del día siguiente, en la que se junta esa última micción.
Los resultados serán informados por el volumen emitido, de allí la importancia de una adecuada recolección.
Si Ud tiene dichos estudios conjuntamente con una extracción de sangre, el mismo día que finaliza la recolección de la orina, asistir al laboratorio con ayuno de 8 hs o 12 hs según corresponda.', 1
),
(4, 'Urocultivo', '
Debe utilizar un recipiente estéril (comprado en farmacias) Este análisis debe realizarse recolectando la primera orina de la mañana o una orina con 3 horas de retención mínima, siguiendo las indicaciones de higiene previa mencionadas a posteriori y toma de muestra. Suspender todo tratamiento antibiótico 72 horas antes de la toma de muestra, salvo expresa indicación médica. No se aceptarán muestras derramadas.
Hombres: Higienizarse con jabón desinfectante las manos y los genitales, retrayendo el prepucio. Enjuagar con abundante agua y secar con gasa estéril o toalla limpia sin uso. Debe descartar el primer chorro en el inodoro, continuar orinando dentro del recipiente. Desechar el último chorro fuera del recipiente nuevamente. Tapar el recipiente y remitir inmediatamente al laboratorio.
Mujeres: Higienizarse con jabón desinfectante las manos y los genitales externos, no realizar lavajes internos. Enjuagar con abundante agua y secar con gasa estéril o toalla limpia sin uso. Colocar tampón vaginal. Separar con los dedos los labios de la vulva y orinar el primer chorro fuera del recipiente. Continuar orinando dentro del recipiente.Desechar el último chorro fuera del recipiente. Tapar el recipiente y remitir inmediatamente al laboratorio.
Niños: En niños y niñas mayores la toma de muestra se realizará igual que para adultos. En niños y niñas que no controlan esfínteres se debe observar los hábitos miccionales del bebé. Higienizar con agua y jabón la zona genital y secar con gasa estéril. A las niñas, limpiar de adelante hacia atrás y a los niños, retrayendo el prepucio. Recolectar la orina dentro del recipiente (5 -10 cc) Tapar el recipiente y remitir inmediatamente al laboratorio. No son aptas las bolsas colectoras para realizar este estudio.
Pacientes con sonda vesical: Higienizar la sonda con antiséptico y realizar punción de la sonda en la zona proximal de la salida de la uretra ,recolectarla con jeringa y colocarla en un frasco esteril.
** CONSERVAR Y TRANSPORTAR REFRIGERADA HASTA EL LABORATORIO.
** Rotular el frasco con NOBRE, APELLIDO Y EDAD.', 1
),
(5, 'Parasitológico seriado', '
Debe utilizar un recipiente con formol al 5% suministrado por el laboratorio.
No consumir aceites, vaselina, laxantes, ni medicamentos que contengan carbón.
En caso de haberse sacado radiografías con ingestión de elementos de contraste (tipo solubar o similares), dejar pasar 3 días antes de empezar a juntar la muestra.
Recolectar un poco de materia fecal emitida espontáneamente (del tamaño de una cucharada de té) de cada deposición diaria durante 7 días consecutivos. Si un día no hay deposiciones juntar un día más. Si hay varias deposiciones por día juntar de una sola.
Conservar a temperatura ambiente y una vez finalizado remitir al laboratorio.', 1),
(6, 'Test de Graham', '
Debe utilizar un recipiente con formol al 5% suministrado por el laboratorio.
La noche anterior NO lavar el ano con agua, ni colocar talco ni pomadas.
No ir de cuerpo antes de realizar la toma de la muestra.
A la mañana siguiente, al despertar y sin levantarse de la cama, con una gasita limpia que previamente habrá humedecido con solución fisiológica, limpiar el margen, los pliegues y la zona anal.
Luego, colocar la gasita en el frasco.
Realizar de idéntica forma durante 7 días consecutivos, guardando la gasa correspondiente por día y cerrando el frasco inmediatamente.
Conservar a temperatura ambiente y una vez finalizado remitir al laboratorio.', 1),
(7, 'Sangre oculta en materia fecal', '
Debe utilizar un recipiente estéril, de boca ancha y seco (sin formol, comprado en farmacias).
No tomar antibióticos 72 horas antes de tomar la muestra, salvo indicación médica.
Colocar en el recipiente un trocito de material fecal del tamaño de una cuchara de té, o su equivalente en el caso de diarrea.
Si existieran zonas con pus y/o sangre y/o cualquier otra cosa de aspecto raro o sospechoso, tomar el material de esa zona.
Cerrar el recipiente y no volver a abrirlo.', 1),
(8, 'Ecografías', '
De una deposición espontánea, colocar en un frasco limpio y seco una pequeña porción de materia fecal, tamaño cuchara de té. Esta muestra no debe tener contacto con la orina ni con ningún otro líquido.
Guardar en heladera y remitirlo al laboratorio antes de las 24 hs de obtenida la muestra.
No ingerir suplementos de hierro por vía oral 72 hs previas a la toma de la muestra.
Evitar el sangrado de las encías al cepillarse los dientes.
En caso de ser seriado de sangre oculta (según pedido médico) recoger una pequeña porción de materia fecal durante 3 días consecutivos en distintos recipientes plásticos, limpios y secos, rotulándolos como número 1, 2 y 3. Hasta remitir las muestras al laboratorio, mantenerlas refrigeradas.', 2),
(9, 'Ecodoppler', '
Abdominal: 8 hs de ayuno.
Hepatobiliopancreática/HBP: 8hs de ayuno.
Renal: Sin preparación.
Vejiga y vías urinarias: tomar 1 litro de agua una hr antes del turno y retener.
Renal y vesicoprostática: tomar 1 litro de agua una hr antes del turno y retener.
Ginecológica o tocoginecológica: tomar 1 litro de agua una hr antes del turno y retener.
Transrectal: 8 hs de ayuno, Realizar un enemol la noche anterior al estudio, Realizar un enemol 2hs antes del turno.', 2),
(10, 'Estudios seriados', '
- Seriada Esófagogastroduodenal:
Día previo al examen: deberá comer liviano, sin grasas, sin picantes y nada de alcohol.
Día del examen: presentarse con 8hs de ayuno total. Evite fumar. No tome ninguna medicación. Si no puede suspender alguna medicación debe tratar de ingerir las pastillas con la mínima cantidad de agua posible. Si la toma coincide con el horario del estudio deberá efectuarla después de terminado el mismo.
Traer estudios previos de estómago y duodeno si los posee.
Indicaciones posteriores a la realización del estudios: Tomar 2 litros de agua por día e ingerir una cucharada de leche de magnesia con la cena durante los tres días subsiguientes.

- Videodeglución: presentarse con 8 hs de ayuno total.
  Traer:
  - 2 rebanadas de pan lactal o vainillas.
  - 1 yogurt firme de vainilla o frutilla.
  - 1 cucharita descartable.
  - 1 dvd marca Sony.
  - Cistouretrografía: No hacer ayuno.

  Traer:
  - Análisis de urocultivo negativo de no más de 15 días de realizado.
  - 2 toallas de mano.
  - Histerosalpingografía: Llamar o concurrir para la solicitud del turno el primer día del ciclo femenino. El turno se le asignará entre el séptimo y el décimo día de su ciclo (según disponibilidad).
  Día del examen: 4hs. de ayuno, Abstinencia sexual desde el primer día del ciclo menstrual. -No tomar Cafiaspirina, Bayaspirina ni antiinflamatorios.

  Traer:
  - Apósitos.
  - Toallón.
  - Estudios anteriores.', 2),
(11, 'Punción de tiroides', '
7 días antes no debe ingerir aspirinas ni antiinflamatorios. En el caso de pacientes con tratamientos de aspirinas (pacientes con patologías cardíacas) deben suspender su uso 3 días antes del estudio.
El día del estudio debe concurrir al mismo con 5hs de ayuno.
Traer estudios anteriores.
Traer resultado del tiempo de coagulación realizado dentro del mes.', 2);
