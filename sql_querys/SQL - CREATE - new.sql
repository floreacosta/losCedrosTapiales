CREATE DATABASE IF NOT EXISTS clinicaloscedros;

USE clinicaloscedros;

CREATE TABLE IF NOT EXISTS empleado (
  id int not null auto_increment primary key,
  nombre varchar(100) not null,
  -- imagen varchar(255) not null,
  titulo varchar(30),
  -- cv text,
  sexo char not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

-- CREATE TABLE IF NOT EXISTS doctor (
--    id int not null auto_increment primary key,
--    idEmpleado int not null,
--
--    CONSTRAINT foreign_key_idEmpleado FOREIGN KEY (idEmpleado) REFERENCES empleado (id)
-- ) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS jefe_sector (
   id int not null auto_increment primary key,
   idEmpleado int not null,
   cargo text not null,

   CONSTRAINT foreign_key_idEmpleado FOREIGN KEY (idEmpleado) REFERENCES empleado (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS jefe_servicio (
   id int not null auto_increment primary key,
   idEmpleado int not null,
   cargo text not null,

   CONSTRAINT foreign_key_idEmpleado FOREIGN KEY (idEmpleado) REFERENCES empleado (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

-- CREATE TABLE IF NOT EXISTS categoria (
--    id int not null auto_increment primary key,
--    nombre varchar(100) not null,
--    descripcion text
-- ) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS especialidad (
   id int not null auto_increment primary key,
   nombre varchar(100) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS cobertura (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS servicio (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   descripcion text,
   idJefeServicio int not null,

   CONSTRAINT foreign_key_idJefeServicio FOREIGN KEY (idJefeServicio) REFERENCES jefe_servicio (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS instalacion (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null,
   descripcion text,
   idServicio int not null,

   CONSTRAINT foreign_key_idServicio FOREIGN KEY (idServicio) REFERENCES servicio (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS tipoXestudio (
  id int not null auto_increment primary key,
  nombre varchar(100) not null,
  descripcion text

) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS estudio (
  id int not null auto_increment primary key,
  nombre varchar(100) not null,
  descripcion text,
  idTipo int not null,

  CONSTRAINT foreign_key_idTipoXestudio FOREIGN KEY (idTipo) REFERENCES tipoXestudio (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS usuario (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   usuario varchar(30) not null,
   pass varchar(255) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS noticia (
  id int not null auto_increment primary key,
  titulo text not null,
  bajada text,
  cuerpo text not null,
  imagen varchar(255),
  descripcionImagen text
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;
