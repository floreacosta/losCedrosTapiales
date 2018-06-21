CREATE DATABASE IF NOT EXISTS clinicaloscedros;

USE clinicaloscedros;

CREATE TABLE IF NOT EXISTS instalaciones(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null,
   descripcion text
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS especialidades(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   idCategoria INT
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS doctores(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   esMedicoCabecera TINYINT
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS doctorXEspecialidad(
   id int not null auto_increment primary key,
   idEspecialidad int not null,
   idDoctor int not null
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS coberturas(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS servicios(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
	 imagen varchar(255) not null,
   descripcion text
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS categorias(
   id int not null auto_increment primary key,
   nombre varchar(100) not null
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS usuarios(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   usuario varchar(30) not null,
   pass varchar(255) not null
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS autoridades(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   cargo varchar(100),
   imagen varchar(255),
   cv text
) ENGINE=InnoDB;
