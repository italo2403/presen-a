create database presenca;
use presenca; 

create table cadastro(
id int primary key auto_increment,
nome varchar(150),
turma varchar(10),
dia_hora datetime
);

select * from cadastro;