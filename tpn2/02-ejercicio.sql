CREATE DATABASE IF NOT EXISTS mantovanidb;
USE mantovanidb;


CREATE TABLE profesor (
    id                  int(10) auto_increment not null,
    dni                 char(8) not null,
    nombre              varchar(100) not null,
    direccion           varchar(100) not null,
    telefono            varchar(60) not null,
    CONSTRAINT pk_profesor PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE modulo (
    id                  int(10) auto_increment not null,
    codModulo           varchar(10) not null,
    idProfesor          int(10) not null,
    nombre              varchar(60) not null,
    CONSTRAINT pk_modulo PRIMARY KEY(id),
    CONSTRAINT fk_modulo_profesor FOREIGN KEY (idProfesor) REFERENCES profesor (id)
)ENGINE=InnoDB;


CREATE TABLE alumno (
    id                  int(10) auto_increment not null,
    noExpediente        int(10) not null,
    nombre              varchar(100) not null,
    apellidos           varchar(100) not null,
    fechaNacimiento     date,
    CONSTRAINT pk_alumno PRIMARY KEY(id)
)ENGINE=InnoDB;