<?php

include "banco.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
	
	$tarefa = buscaTarefa($conexao, $_GET['id']);
	
	if (count($tarefa) > 0) {
		
		$sqlDuplicar = "INSERT INTO tarefas
			(nome, descricao, prioridade, prazo, concluida)
			VALUES (
			'{$tarefa['nome']}',
			'{$tarefa['descricao']}',
			'{$tarefa['prioridade']}',
			'{$tarefa['prazo']}',
			'{$tarefa['concluida']}'
		)";
		
		mysqli_query($conexao, $sqlDuplicar);
		
		header('Location: tarefas.php');
	}
}