CREATE DATABASE IF NOT EXISTS clinicaloscedros;

USE clinicaloscedros;

CREATE TABLE IF NOT EXISTS autoridades(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   cargo varchar(100),
   imagen varchar(255),
   cv text
) ENGINE=InnoDB;

INSERT INTO autoridades (nombre, cargo, imagen, cv) VALUES
(1, "Dr. Rodríguez Cetran", "Director General", "", ""),
(2, "Dr. Horacio Pampin", "Director Medico", "", ""),
(3, "Sr. Alejandro Hafez", "Director Administrativo", "", ""),
(4, "Lic. Vilma di Pascua", "Jefa de Recursos Humanos", "", ""),
(5, "Dr. Hugo D. Tedesco", "Gerencia Médica", "", ""),
(6, "Dra. Marisa Flores", "Coordinación General", "", ""),
(7, "Dr. Nicolas D’Agostino", "Coordinación de Terapia Intensiva", "", ""),
(8, "Dra Jannet Chacon", "Jefa de Servicio de Emergencias", "", ""),
(9, "Dr. Alejandro García Escudero", "Jefe de Servicio de Hemodinamia", "", ""),
(10, "Dr. Luis Frank", "Jefe de Servicio de Cirugía Cardiovascular", "", ""),
(11, "Dr. Alberto Marani", "Jefe De Servicio de Cardiología", "", ""),
(12, "Dr. Guillermo Benchetrit", "Jefe de Servicio de Infectologia", "", ""),
(13, "Dr. Maximo Zimerman", "Jefe de Servicio de Rehabilitación", "", ""),
(14, "Dra. Mariana Pampin", "Jefe de Servicio de Ginecologia y Obstetricia", "", ""),
(15, "Dr. Juan D. Bonello", "Jefe de Servicio de Pediatria", "", ""),
(16, "Dr. Jorge Borkowsky", "Jefe de Servicio de Hemoterapia", "", ""),
(17, "", "Jefe de Servicio de Neurología", "", ""),
(18, "", "Jefe de Servicio de Neurocirugía", "", ""),
(19, "", "Jefe de Servicio de Cirugía", "", ""),
(20, "", "Jefe de Servicio de Neumonología", "", ""),
(21, "", "Jefe de Servicio de Diagnostico por Imagen", "", ""),
(22, "", "Jefe de Servicio de Urologia", "", ""),
(23, "", "Jefe de Servicio de Traumatología", "", ""),
(24, "", "Jefe de Cirugía de Torax", "", ""),
(25, "", "Jefe de Servicio de Laboratorio", "", ""),
(26, "", "Jefe de Servicio de Bacteriología", "", ""),
(27, "", "Jefe de Servicio de Endoscopia Digestiva", "", ""),
(28, "", "Jefe de Servicio de Oncologia", "", ""),
(29, "", "Jefe de Servicio de Fibrobroncoscopia", "", ""),
(30, "", "Jefe de Servicio de Kinesiologia", "", "");
