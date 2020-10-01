create database provaODAW;
use provaODAW;

create table usuario (
    id serial,
    login varchar(100) not null,
    senha varchar(100) not null
);

insert into usuario (id, login, senha) values (1, 'Gere1', '123456');
insert into usuario (id, login, senha) values (2, 'admin', 'admin');
insert into usuario (id, login, senha) values (3, 'outroUser', '123456');

create table transportadora(
    id serial,
    nome varchar(100) not null,
    cidades varchar(100) not null,
    interestadual char(5) not null,
    areas varchar(100) not null
);

