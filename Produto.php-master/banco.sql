CREATE DATABASE contato;
use contato;
CREATE table Contatos( 
	id int PRIMARY KEY AUTO_INCREMENT,
 	nome varchar(32), 
  	senha varchar(240),
	email varchar(32)
);