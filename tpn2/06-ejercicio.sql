CREATE DATABASE IF NOT EXISTS informaticadb;
USE informaticadb;

CREATE TABLE cliente(
    id              int auto_increment not null,
    codigo          varchar(10) not null,
    nombre          varchar(100) not null,
    apellidos       varchar(100) not null,
    direccion       varchar(100) not null,
    telefono        varchar(15) not null,
    CONSTRAINT pk_cliente PRIMARY KEY (id)
)ENGINE=InnoDB;


CREATE TABLE producto (
    id              int auto_increment not null,
    codigo          varchar(10) not null,
    descripcion     varchar(100) not null,
    precio          float(20,2) not null,
    stock           int(10),
    CONSTRAINT pk_producto PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE proveedor (
    id              int auto_increment not null,
    codigo          varchar(10) not null,
    nombre          varchar(100) not null,
    apellidos       varchar(100) not null,
    direccion       varchar(100) not null,
    provincia       varchar(100) not null,
    telefono        varchar(15),
    CONSTRAINT pk_proveedor PRIMARY KEY (id)
)ENGINE=InnoDB;