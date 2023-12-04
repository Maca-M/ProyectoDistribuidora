CREATE DATABASE proyecto;
USE proyecto;

CREATE DATABASE proyecto;
USE proyecto;

CREATE TABLE users(
id          int(255) auto_increment not null,
name        varchar(100) not null,
pass        varchar(100) not null,
rol         varchar(100) not null,
CONSTRAINT pk_users PRIMARY KEY(id),
CONSTRAINT uq_name UNIQUE(name) 
) ENGINE=InnoDb;

CREATE TABLE products(
id              int(255) auto_increment not null,
cod             varchar(100) not null,
name            varchar(100) not null,
description     text,
price           float(100,2) not null,
CONSTRAINT pk_products PRIMARY KEY(id),
CONSTRAINT uq_cod UNIQUE(cod) 
) ENGINE=InnoDb;

CREATE TABLE clients(
id          int(255) auto_increment not null,
name        varchar(100) not null,
description     text,
CONSTRAINT pk_clients PRIMARY KEY(id),
CONSTRAINT uq_name UNIQUE(name) 
) ENGINE=InnoDb;

CREATE TABLE sales(
id          int(255) auto_increment not null,
client_id   int(255) not null,
user_id     int(255) not null,
total       float(100,2) not null,
date        date,
CONSTRAINT pk_sale PRIMARY KEY(id),
CONSTRAINT fk_sale_client FOREIGN KEY(client_id) REFERENCES clients(id), 
CONSTRAINT fk_sale_user FOREIGN KEY(user_id) REFERENCES users(id)
) ENGINE=InnoDb;

CREATE TABLE saledetails(
id          int(255) auto_increment not null,
sale_id     int(255) not null,
product_id  int(255) not null,
quantity    int(255) not null,
subtotal    float(100,2) not null,
CONSTRAINT pk_saledetail PRIMARY KEY(id),
CONSTRAINT fk_saledetail_sale FOREIGN KEY(sale_id) REFERENCES sales(id), 
CONSTRAINT fk_saledetail_product FOREIGN KEY(product_id) REFERENCES products(id)
) ENGINE=InnoDb;