INSERT INTO categoria (nombre, descripcion) VALUES
('Edificio', 'Sanatorio Privado Madero ofrece una infraestructura de de 4 plantas totalmente renovados.\r\nPosee 5 sectores de internación clínica, quirúrgica y de obstetricia.'),
('Equipamiento técnico', 'Equipamiento de primera. Área con nuevo tomógrafo helicoideal funcionando las 24hs.'),
('Habitaciones', 'Las suites de internación disponen con aire acondicionado, televisión satelital, Wifi y comodidades para acompañantes.'),
('Laboratorio', 'Laboratorio equipado con tecnología moderna, realizando análisis clínicos y bacteriológicos.'),
('Pediatría', 'Guardias pediátricas equipadas con juegos y entretenimientos para los más chicos.'),
('Sala de espera', 'Áreas de internación con amplia iluminación y cómoda accesibilidad para todo tipo de pacientes.');

INSERT INTO instalacion (nombre, imagen, descripcion, idCategoria) VALUES
-- ('Instalaciones internas', 'edificio-11.jpg', ''),
-- ('Edificio 2', 'edificio-2.jpg', ''),
-- ('edificio 3', 'edificio-3.jpg', ''),
-- ('Consultorios', 'consultorios-1.jpg', ''),
-- ('Consultorios 2', 'consultorios-2.jpg', ''),
('Equipamiento', 'equipamiento-tecnico-1.jpg', '', 2),
('Equipamiento 2', 'equipamiento-tecnico-2.jpg', '', 2),
('Equipamiento 3', 'equipamiento-tecnico-3.jpg', '', 2),
('Equipamiento 4', 'equipamiento-tecnico-4.jpg', '', 2),
('Equipamiento 5', 'equipamiento-tecnico-5.jpg', '', 2),
('Equipamiento 6', 'equipamiento-tecnico-6.jpg', '', 2),
('Equipamiento 7', 'equipamiento-tecnico-7.jpg', '', 2),
('Equipamiento 8', 'equipamiento-tecnico-9.jpg', '', 2),
('Equipamiento 10', 'equipamiento-tecnico-10.jpg', '', 2),
('Equipamiento 11', 'equipamiento-tecnico-11_1.jpg', '', 2),
('Equipamiento 12', 'equipamiento-tecnico-11_2.jpg', '', 2),
('Habitaciones', 'habitaciones-0.jpg', '', 3),
('Habitaciones 2', 'habitaciones-1.jpg', '', 3),
('Habitaciones 3', 'habitaciones-2.jpg', '', 3),
('Habitaciones 4', 'habitaciones-3.jpg', '', 3),
('Habitaciones 5', 'habitaciones-4.jpg', '', 3),
('Habitaciones 6', 'habitaciones-5.jpg', '', 3),
('Habitaciones 7', 'habitaciones-6.jpg', '', 3),
('Laboratorio', 'laboratorio-1.jpg', '', 4),
('Laboratorio 2', 'laboratorio-2.jpg', '', 4),
('Laboratorio 3', 'laboratorio-3.jpg', '', 4),
('Pediatría', 'pediatria-1.jpg', '', 5),
('Pediatría 2', 'pediatria-2.jpg', '', 5),
('Pediatría 3', 'pediatria-3.jpg', '', 5),
('Sala de espera', 'sala-de-espera-0_1.jpg', '', 6),
('Sala de espera 2', 'sala-de-espera-0_2.jpg', '', 6),
('Sala de espera 3', 'sala-de-espera-0.jpg', '', 6),
('Sala de espera 4', 'sala-de-espera-1.jpg', '', 6),
('Sala de espera 5', 'sala-de-espera-2.jpg', '', 6),
('Sala de espera 6', 'sala-de-espera-3.jpg', '', 6),
('Sala de espera 7', 'sala-de-espera-4.jpg', '', 6),
('Sala de espera 8', 'sala-de-espera-5.jpg', '', 6),
('Edificio 4', '2018-edificio-1.png', '', 1),
('Edificio 4', '2018-diagnostico-por-imagenes.jpg', '', 2),
('Maqueta del Edificio', '2018-edificio-maqueta.jpg', '', 1),
('Habitación', '2018-habitaciones-4.jpg', '', 3),
('Habitación', '2018-habitaciones-5.jpg', '', 3),
('Habitación', '2018-habitaciones-7.jpg', '', 3),
('Hemodialisis', '2018-hemodialisis.jpg', '', 2),
('Hemodinamia', '2018-hemodinamia-3.jpg', '', 2),
('Hemodinamia', '2018-hemodinamia-4.jpg', '', 2),
('Hospital de Día', '2018-hospital-de-dia.jpg', '', 2),
('Instalaciones', '2018-instalaciones-0.jpg', '', 6),
('Instalaciones', '2018-instalaciones-1.jpg', '', 6),
('Instalaciones', '2018-instalaciones-2.jpg', '', 6),
('Rehabiliatación', '2018-rehabiliatacion-4.jpg', '', 2),
('Rehabiliatación', '2018-rehabiliatacion-5.jpg', '', 2),
('Rehabiliatación', '2018-rehabiliatacion-6.jpg', '', 2),
('Terapia intensiva', '2018-terapia-intensiva.jpg', '', 2);

-- 2 - 2018-centro-quirugico.jpg
-- 2 - 2018-diagnostico-por-imagenes.jpg
-- 1 - 2018-edificio-1.png
-- 1 - 2018-edificio-maqueta.jpg
-- 3 - 2018-habitaciones-4.jpg
-- 3 - 2018-habitaciones-5.jpg
-- 3 - 2018-habitaciones-7.jpg
-- 2 - 2018-hemodialisis.jpg
-- 2 - 2018-hemodinamia-3.jpg
-- 2 - 2018-hemodinamia-4.jpg
-- 2 - 2018-hospital-de-dia.jpg
-- 6 - 2018-instalaciones-0.jpg
-- 6 - 2018-instalaciones-1.jpg
-- 6 - 2018-instalaciones-2.jpg
-- 2 - 2018-rehabiliatacion-4.jpg
-- 2 - 2018-rehabiliatacion-5.jpg
-- 2 - 2018-rehabiliatacion-6.jpg
-- 2 - 2018-terapia-intensiva.jpg
-- 2 - equipamiento-tecnico-1.jpg
-- 2 - equipamiento-tecnico-2.jpg
-- 2 - equipamiento-tecnico-3.jpg
-- 2 - equipamiento-tecnico-4.jpg
-- 2 - equipamiento-tecnico-5.jpg
-- 2 - equipamiento-tecnico-6.jpg
-- 2 - equipamiento-tecnico-7_1.jpg
-- 2 - equipamiento-tecnico-7.jpg
-- 2 - equipamiento-tecnico-9.jpg
-- 2 - equipamiento-tecnico-10.jpg
-- 2 - equipamiento-tecnico-11_1.jpg
-- 2 - equipamiento-tecnico-11_2.jpg
-- 3 - habitaciones-0.jpg
-- 3 - habitaciones-1.jpg
-- 3 - habitaciones-2.jpg
-- 3 - habitaciones-3.jpg
-- 3 - habitaciones-4.jpg
-- 3 - habitaciones-5.jpg
-- 3 - habitaciones-6.jpg
-- 5 - pediatria-1.jpg
-- 5 - pediatria-2.jpg
-- 5 - pediatria-3.jpg
-- 6 - sala-de-espera-0_1.jpg
-- 6 - sala-de-espera-0_2.jpg
-- 6 - sala-de-espera-0.jpg
-- 6 - sala-de-espera-1.jpg
-- 6 - sala-de-espera-2.jpg
-- 6 - sala-de-espera-3.jpg
-- 6 - sala-de-espera-4.jpg
-- 6 - sala-de-espera-5.jpg

-- NO? 4 - laboratorio-1.jpg
-- NO? 4 - laboratorio-2.jpg
-- NO? 4 - laboratorio-3.jpg
-- NO consultorios-1.jpg
-- NO consultorios-2.jpg
-- NO consultorios-21.jpg
-- NO edificio-2.jpg
-- NO edificio-3.jpg
-- NO edificio-11.jpg
