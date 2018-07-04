CREATE DATABASE IF NOT EXISTS clinicaloscedros;

USE clinicaloscedros;

CREATE TABLE IF NOT EXISTS empleado (
  id int not null auto_increment primary key,
  nombre varchar(100) not null,
  imagen varchar(255) not null,
  titulo varchar(30),
  cv text,
  sexo char not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

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

CREATE TABLE IF NOT EXISTS doctor (
   id int not null auto_increment primary key,
   idEmpleado int not null,

   CONSTRAINT foreign_key_idEmpleado FOREIGN KEY (idEmpleado) REFERENCES empleado (id)
) ENGINE=InnoDB;

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

CREATE TABLE IF NOT EXISTS servicio (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   descripcion text,
   idDoctor int not null,

   CONSTRAINT foreign_key_idDoctor FOREIGN KEY (idDoctor) REFERENCES doctor (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS instalacion (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null,
   descripcion text,
   idCategoria int not null,

   CONSTRAINT foreign_key_idCategoria FOREIGN KEY (idCategoria) REFERENCES categoria (id)
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS usuario (
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   usuario varchar(30) not null,
   pass varchar(255) not null
) ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS doctorXEspecialidad (
   id int not null auto_increment primary key,
   idEspecialidad int not null,
   idDoctor int not null,

   CONSTRAINT foreign_key_idDoctor FOREIGN KEY (idDoctor) REFERENCES doctor (id),
   CONSTRAINT foreign_key_idEspecialidad FOREIGN KEY (idEspecialidad) REFERENCES especialidad (id)
)ENGINE=InnoDB CHARACTER SET = utf8, COLLATE = utf8_general_ci;
