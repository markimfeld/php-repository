CREATE DATABASE tienda_master;
USE tienda_master;


CREATE TABLE usuario (
id              int(255) auto_increment not null,
nombre          varchar(255) not null,
apellidos       varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
imagen          varchar(255) null,

CONSTRAINT pk_usuario PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO usuario VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'contraseña', 'admin', null);

CREATE TABLE categoria (
id              int(255) auto_increment not null,
nombre          varchar(255) not null,
CONSTRAINT pk_categoria PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categoria VALUES(NULL, 'Estilos');


CREATE TABLE producto (
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(255) not null,
descripcion     varchar(255),
precio          float(200,2) not null,
stock           int(255) not null,
oferta          varchar(2),
fecha           date,
imagen          varchar(255),
CONSTRAINT pk_producto PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY (categoria_id) REFERENCES categoria(id)
)ENGINE=InnoDb;


CREATE TABLE pedido (
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
provincia       varchar(255) not null,
localidad       varchar(255) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(255),
fecha           date,
hora            time,
CONSTRAINT pk_pedido PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);


CREATE TABLE linea_pedido (
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_linea_pedido PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido_pedido FOREIGN KEY (pedido_id) REFERENCES pedido(id),
CONSTRAINT fk_linea_pedido_producto FOREIGN KEY (producto_id) REFERENCES producto(id)
)ENGINE=InnoDb;