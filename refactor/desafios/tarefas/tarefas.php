<?php

session_start();

include "banco.php";
include "ajudantes.php";

$exibir_tabela = true;

if (isset($_GET['nome']) && $_GET['nome'] != '') {
	
	include_once 'create_update.php';
	
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		
		# Atribuindo id
		$tarefa['id'] = $_GET['id'];
		
		editarTarefa($conexao, $tarefa);
		
	} else {
		
		gravarTarefa($conexao, $tarefa);
	}
	
	header('Location: tarefas.php');
	
	die;
	
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
	
	$tarefa = buscaTarefa($conexao, $_GET['id']);
	
} else {

# Array de tarefas
	$lista_tarefas = buscaTarefas($conexao);
	
	$tarefa = [
		'id' 					=> 0,
		'nome' 				=> '',
		'descricao' 	=> '',
		'prioridade' 	=> 1,
		'concluida' 	=> '',
	];
	
}

include "template.php";