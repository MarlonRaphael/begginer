CREATE DATABASE estacionamento
DEFAULT CHARSET utf8
DEFAULT COLLATE utf8_general_ci;

use estacionamento;

CREATE TABLE veiculos(
	id int AUTO_INCREMENT NOT NULL,
    placa varchar(8),
    marca varchar(20),
    modelo varchar(20),
    hora_entrada time,
    hora_saida time,
    PRIMARY KEY(id)
)DEFAULT CHARSET = utf8;

ALTER TABLE veiculos
MODIFY COLUMN placa VARCHAR(8) NOT NULL;

SELECT * FROM veiculos;

INSERT INTO veiculos VALUES (DEFAULT, 'AWM-1340', 'Ford', 'Ka', '14:39', '14:50');
INSERT INTO veiculos VALUES (DEFAULT, 'BAI-1579', 'Chevrolet', 'Cobalt', '14:53', '15:15');
INSERT INTO veiculos VALUES (DEFAULT, 'ASD-1408', 'Ford', 'New Focus', '14:45', '15:23');
INSERT INTO veiculos VALUES (DEFAULT, 'AGE-0911', 'Renault', 'Megane', '14:57', '15:30');

SELECT * FROM veiculos WHERE marca = 'Ford';

SELECT * FROM veiculos ORDER BY hora_saida ASC;