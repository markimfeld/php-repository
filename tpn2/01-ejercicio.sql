CREATE DATABASE IF NOT EXISTS medinahnosdb;
USE medinahnosdb;


CREATE TABLE cliente (
    id                     int(10) auto_increment not null,
    dni                    varchar(8) not null,
    nombre                 varchar(100) not null,
    apellidos              varchar(200) not null,
    direccion              varchar(100) null,
    fechaNacimiento        date,
    CONSTRAINT pk_cliente PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE proveedor (
    id                     int(10) auto_increment not null,
    nif                    varchar(10) not null,
    nombre                 varchar(100) not null,
    direccion              varchar(100) null,
    CONSTRAINT pk_proveedor PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE cliente_proveedor (
    idCliente              int(10) not null,
    idProveedor            int(10) not null,
    CONSTRAINT fk_cliente_proveedor FOREIGN KEY (idCliente) REFERENCES cliente(id),
    CONSTRAINT fk_cliente_proveedor FOREIGN KEY (idProveedor) REFERENCES proveedor(id)
)ENGINE=InnoDB;


CREATE TABLE producto (
    id                     int(10) auto_increment not null,
    codProducto            varchar(5) not null,
    idProveedor            int(10) not null,
    precioUnitario         float(10,2) not null,
    CONSTRAINT pk_producto PRIMARY KEY (id),
    CONSTRAINT fk_producto_proveedor FOREIGN KEY (idProveedor) REFERENCES proveedor(id)
)ENGINE=InnoDB;