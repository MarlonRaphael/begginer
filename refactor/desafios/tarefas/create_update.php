<?php

$exibir_tabela = false;

# Array tarefa
$tarefa = array();

# Atribuindo nome
$tarefa['nome'] = $_GET['nome'];

# Atribuindo descrição
if (isset($_GET['descricao'])) {
	$tarefa['descricao'] = $_GET['descricao'];
} else {
	$tarefa['descricao'] = '';
}

# Atribuindo prazo
if (isset($_GET['prazo'])) {
	
	//		$tarefa['prazo'] = traduzDataHoraBanco($_GET['prazo']);
	$tarefa['prazo'] = $_GET['prazo'];
} else {
	$tarefa['prazo'] = '';
}

# Atribuindo prioridade
$tarefa['prioridade'] = $_GET['prioridade'];

# Atribuindo status
if (isset($_GET['concluida'])) {
	$tarefa['concluida'] = 1;
} else {
	$tarefa['concluida'] = 0;
}