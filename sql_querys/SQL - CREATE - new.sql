CREATE DATABASE IF NOT EXISTS clinicaloscedros;

USE clinicaloscedros;

CREATE TABLE IF NOT EXISTS cargo (
   id int not null auto_increment primary key,
   nombre varchar(100) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS empleado (
  id int not null auto_increment primary key,
  nombre varchar(100) not null,
  idCargo int not null,
  sexo char not null,

  CONSTRAINT foreign_key_idCargo FOREIGN KEY (idCargo) REFERENCES cargo (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS sector (
  id int not null auto_increment primary key,
  nombre varchar(100) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS servicio (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   descripcion text
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS jefe_sector (
   id int not null auto_increment primary key,
   idEmpleado int not null,
   idCargo int not null,
   idSector int not null,

   CONSTRAINT foreign_key_idEmpleado FOREIGN KEY (idEmpleado) REFERENCES empleado (id),
   CONSTRAINT foreign_key_idCargo FOREIGN KEY (idCargo) REFERENCES cargo (id),
   CONSTRAINT foreign_key_idSector FOREIGN KEY (idSector) REFERENCES sector (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS jefe_servicio (
   id int not null auto_increment primary key,
   idEmpleado int not null,
   idCargo int not null,
   idServicio int not null,
   idEspecialidad int,

   CONSTRAINT foreign_key_idEmpleado FOREIGN KEY (idEmpleado) REFERENCES empleado (id),
   CONSTRAINT foreign_key_idCargo FOREIGN KEY (idCargo) REFERENCES cargo (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS categoria (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   descripcion text
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS especialidad (
   id int not null auto_increment primary key,
   nombre varchar(100) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS cobertura (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS instalacion (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null,
   descripcion text,
   idCategoria int not null,

   CONSTRAINT foreign_key_idCategoria FOREIGN KEY (idCategoria) REFERENCES categoria (id)
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
