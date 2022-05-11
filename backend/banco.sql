create database cardapio_if;
use cardapio_if;

create table ingredientes(

    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
    descr varchar(200) NOT NULL,
    calorias varchar(200) NOT NULL,
    primary key(id)

);