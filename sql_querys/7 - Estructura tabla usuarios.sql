USE clinicaloscedros;
 
CREATE TABLE IF NOT EXISTS usuarios(
   id int not null auto_increment primary key,
   nombre varchar(100) not null,
   usuario varchar(30) not null,
   pass varchar(255) not null
) ENGINE=InnoDB;