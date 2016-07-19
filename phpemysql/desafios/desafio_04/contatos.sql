CREATE DATABASE contatos
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

use contatos;

CREATE TABLE contatos(
	id int AUTO_INCREMENT NOT NULL,
    nome varchar(20),
    fone varchar(20),
    email varchar(100),
    datanasc date,
    favorito boolean,
    descricao text,
    PRIMARY KEY(id)
)DEFAULT CHARSET = utf8;

DESC contatos;

ALTER TABLE contatos
MODIFY COLUMN nome varchar(20) NOT NULL;