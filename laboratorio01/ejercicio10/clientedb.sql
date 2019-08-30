CREATE DATABASE clientedb;
USE clientedb;


CREATE TABLE cliente (
id              int(255) auto_increment not null,
nombre          varchar(255) not null,
apellido        varchar(255) not null,
total_deuda     float(20,3) not null,

CONSTRAINT pk_cliente PRIMARY KEY(id)
)ENGINE=InnoDb;
