<?php

session_start();

if (isset($_GET['nome']) && $_GET['nome'] != '') {
	
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
		$tarefa['prazo'] = $_GET['prazo'];
	} else {
		$tarefa['prazo'] = '';
	}
	
	# Atribuindo prioridade
	$tarefa['prioridade'] = $_GET['prioridade'];
	
	# Atribuindo status
	if (isset($_GET['concluida'])) {
		$tarefa['concluida'] = $_GET['concluida'];
	} else {
		$tarefa['concluida'] = '';
	}
	
	$_SESSION['lista_tarefas'][] = $tarefa;
	
}

# Array de tarefas
$lista_tarefas = array();

if (isset($_SESSION['lista_tarefas'])) {
	$lista_tarefas = $_SESSION['lista_tarefas'];
}

include "template.php";