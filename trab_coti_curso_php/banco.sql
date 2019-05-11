create database coti01;

use coti01;

create table livros(
    codigo int primary key auto_increment,
    titulo varchar(50),
    editora varchar(50),
    autor varchar(50),
    anoEdicao int,
    categoria varchar(50),
    numeroPaginas int
);

insert into livros values(null, 'teste titulo', 'editeste', 'autorteste', '2000', 'drama', '100');



select * from livros;
