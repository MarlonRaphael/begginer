<?php

session_start();

include "banco.php";
include "ajudantes.php";

$data = $_GET;

if (isset($data['op']) && !empty($data['op'])) {
	$op = $data['op'];
} else {
	$op = '';
}

$exibir_tabela = false;

switch ($op) {
	case 'add':
		gravarTarefa($conexao, $data);
		include "template.php";
		break;
	case 'edt':
		$exibir_tabela = false;
		$tarefa = buscaTarefa($conexao, $data['id']);
		include "template.php";
		break;
	case 'upd':
		$tarefa = getData($data);
		editarTarefa($conexao, $tarefa);
		break;
	case 'cls':
		limparTarefas($conexao);
		break;
	case 'del':
		removerTarefa($conexao, $data['id']);
		break;
	case 'duplicar':
		duplicarTarefa($conexao, $data['id']);
		break;
	default:
		
		$exibir_tabela = true;
		
		# Array de tarefas
		$lista_tarefas = buscaTarefas($conexao);
		
		$tarefa = [
			'id' => 0,
			'nome' => '',
			'descricao' => '',
			'prioridade' => 1,
			'concluida' => '',
		];
		
		include "template.php";
		
		break;
}