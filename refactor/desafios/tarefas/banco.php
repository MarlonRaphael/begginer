<?php

/**
 * Variáveis de conexão com o banco
 */
$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefa';
$bdSenha = 'sistema';
$bdBanco = 'tarefas';

/**
 * Conexão com o banco de dados
 */
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

/**
 * Verificação de conexão com o banco de dados
 */
if (mysqli_connect_errno($conexao)) {
	die("Problemas para conectar no banco. Verifique os dados!");
}

/**
 * Busca todas as tarefas cadastradas no banco de dados
 * @param $conexao
 * @return array
 */
function buscaTarefas($conexao)
{
	$sqlBusca = "SELECT * FROM tarefas";
	$resultado = mysqli_query($conexao, $sqlBusca);
	
	$tarefas = array();
	
	while ($tarefa = mysqli_fetch_assoc($resultado)) {
		$tarefas[] = $tarefa;
	}
	
	return $tarefas;
}

/**
 * @param $conexao
 * @param $id
 * @return array|null
 */
function buscaTarefa($conexao, $id)
{
	$sqlBusca = "SELECT * FROM tarefas WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $sqlBusca);
	return mysqli_fetch_assoc($resultado);
}

/**
 * @param $conexao
 * @param $tarefa
 */
function gravarTarefa($conexao, $tarefa)
{
	try {
		$sqlGravar = "
		INSERT INTO tarefas
			(nome, descricao, prioridade, prazo, concluida)
		VALUES (
			'{$tarefa['nome']}',
			'{$tarefa['descricao']}',
			'{$tarefa['prioridade']}',
			'{$tarefa['prazo']}',
			'{$tarefa['concluida']}'
		)";
		
		mysqli_query($conexao, $sqlGravar);
		
	} catch (Exception $exception) {
		return "{$exception->getLine()} - {$exception->getMessage()}";
	}
}

/**
 * @param $conexao
 * @param $tarefa
 */
function editarTarefa($conexao, $tarefa)
{
	if (isset($tarefa['id']) && !empty($tarefa['id'])) {
		
		$sqlEditar = "
		UPDATE tarefas SET
			nome = '{$tarefa['nome']}',
			descricao = '{$tarefa['descricao']}',
			prioridade = {$tarefa['prioridade']},
			prazo = '{$tarefa['prazo']}',
			concluida = {$tarefa['concluida']}
		WHERE id = {$tarefa['id']}";
		
		mysqli_query($conexao, $sqlEditar);
	}
	header('Location: tarefas.php');
}

/**
 * @param $conexao
 * @param $id
 */
function removerTarefa($conexao, $id)
{
	$sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";
	
	mysqli_query($conexao, $sqlRemover);
	
	header('Location: tarefas.php');
	
	die;
}

/**
 * Limpar tarefas concluídas
 */
function limparTarefas($conexao)
{
	$sqlLimpar = "DELETE FROM tarefas WHERE concluida = 1";
	
	mysqli_query($conexao, $sqlLimpar);
	
	header('Location: tarefas.php');
}

/**
 * @param $conexao
 * @param $data
 */
function duplicarTarefa($conexao, $id)
{
	if (isset($id) && !empty($id)) {
		
		$tarefa = buscaTarefa($conexao, $id);
		
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
}

/**
 * @param $data
 * @return array
 */
function getData($data)
{
	$tarefa = array();
	
	# Atribuindo id
	if (isset($data['id'])) {
		$tarefa['id'] = $data['id'];
	} else {
		$tarefa['id'] = '';
	}
	
	# Atribuindo nome
	if (isset($data['nome'])) {
		$tarefa['nome'] = $data['nome'];
	} else {
		$tarefa['nome'] = '';
	}
	
	# Atribuindo descrição
	if (isset($data['descricao'])) {
		$tarefa['descricao'] = $data['descricao'];
	} else {
		$tarefa['descricao'] = '';
	}
	
	# Atribuindo prazo
	if (isset($data['prazo'])) {
//		$data['prazo'] = traduzDataHoraBanco($_GET['prazo']);
		$tarefa['prazo'] = $data['prazo'];
	} else {
		$tarefa['prazo'] = '';
	}
	
	# Atribuindo prioridade
	if (isset($data['prioridade'])) {
		$tarefa['prioridade'] = $data['prioridade'];
	}
	
	# Atribuindo status
	if (isset($data['concluida'])) {
		$tarefa['concluida'] = 1;
	} else {
		$tarefa['concluida'] = 0;
	}
	
	return $tarefa;
}