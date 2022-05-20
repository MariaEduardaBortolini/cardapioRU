create database cardapio_if;
use cardapio_if;

create table usuarios(

    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
    email varchar(200) NOT NULL,
    senha varchar(200) NOT NULL,
    primary key(id)

);

create table ingredientes(

    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
    descr varchar(200) NOT NULL,
    calorias varchar(200) NOT NULL,
    primary key(id)

);

create table nutricionistas(

    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
    crn varchar(200) NOT NULL,
    primary key(id)
);

create table itens(

    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
    descr varchar(200) NOT NULL,
    ingr varchar(200) NOT NULL,
    primary key(id)

);

create table cardapios(

    id int NOT NULL AUTO_INCREMENT,
    tipo varchar(200) NOT NULL,
    dia date NOT NULL,
    nutri varchar(200) NOT NULL,
    primary key(id)

);
