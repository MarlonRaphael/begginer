use tarefas;

CREATE TABLE tarefas(
	id int AUTO_INCREMENT NOT NULL,
    nome varchar(20),
    descricao text,
    prazo date,
    prioridade int(1),
    concluida boolean,
    PRIMARY KEY(id)
)DEFAULT CHARSET = utf8;

DESC tarefas;

ALTER TABLE tarefas
MODIFY nome varchar(20) NOT NULL;

INSERT INTO tarefas VALUES (DEFAULT, 'Estudar PHP', 'Continuar meus estudos de PHP e MySQL', '2016-07-17', 1, TRUE);
INSERT INTO tarefas VALUES (DEFAULT, 'Estudar HTML', 'HTML é importânte!', '2016-07-17', 2, TRUE);
INSERT INTO tarefas VALUES (DEFAULT, 'Comprar Leite', 'Desnatado', '2016-07-17', 1, FALSE);
INSERT INTO tarefas VALUES (DEFAULT, 'Arrumar as fotos do computador', 'Só quando der tempo', '2016-07-17', 3, FALSE);

SELECT * FROM tarefas;

SELECT nome, prioridade FROM tarefas;

SELECT * FROM tarefas WHERE prioridade = 1;

SELECT * FROM tarefas WHERE nome LIKE '%php%';

SELECT COUNT(*) FROM tarefas;

SELECT nome, descricao, prioridade FROM tarefas WHERE concluida = 0 ORDER BY prioridade ASC;