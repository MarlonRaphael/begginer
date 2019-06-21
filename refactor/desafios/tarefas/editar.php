<?php

session_start();

include "banco.php";
include "ajudantes.php";

$exibir_tabela = false;

if (isset($_GET['nome']) && $_GET['nome'] != '') {
	
	# Array tarefa
	$tarefa = array();
	
	# Atribuindo id
	$tarefa['id'] = $_GET['id'];
	
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
	
	editarTarefa($conexao, $tarefa);
	
	header('Location: tarefas.php');
	die;
	
}

$tarefa = buscaTarefa($conexao, $_GET['id']);

include "template.php";