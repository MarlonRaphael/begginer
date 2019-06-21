<?php

session_start();

include "banco.php";
include "ajudantes.php";

$exibir_tabela = true;

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
	
	gravarTarefa($conexao, $tarefa);
	
	header('Location: tarefas.php');
	
}

# Array de tarefas
$lista_tarefas = buscaTarefas($conexao);

$tarefa = [
	'id' 					=> 0,
	'nome' 				=> '',
	'descricao' 	=> '',
	'prioridade' 	=> 1,
	'concluida' 	=> '',
];

include "template.php";