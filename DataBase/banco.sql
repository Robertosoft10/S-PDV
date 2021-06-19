CREATE DATABASE db_spdv;
USE db_spdv;

CREATE TABLE tb_razsocial(
	idRaz    int not null auto_increment primary key,
	razName varchar (255),
	razContact1 varchar(30),
	razContact2 varchar(30),
	razEnderec varchar(900)
);
CREATE TABLE tb_users(
	idUser  int not null auto_increment primary key,
	userName varchar (100),
	userEmail varchar(255),
	userNivel int,
	userSenha varchar(255),
	userImage varchar(255),
	userDate varchar(20)
);
CREATE TABLE tb_numpeds(
	idNumPed  int not null auto_increment primary key,
	datePed varchar(30)
);
CREATE TABLE tb_products(
	idProduct   int not null auto_increment primary key,
	nameProduct varchar (255),
	precoProduct varchar(30),
	descritionProduct varchar(900),
	imageProduct varchar(255)
);
CREATE TABLE tb_pedids(
	idPed  int not null auto_increment primary key,
	codPed int,
	productId int,
	preco varchar(30),
	quant varchar(30),
	valor varchar(50),
	dataPed varchar(30),
	FOREIGN KEY (codPed) REFERENCES tb_numpeds (idNumPed),
	FOREIGN KEY (productId) REFERENCES tb_products (idProduct)
);

