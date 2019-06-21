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
function buscaCarros($conexao)
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
 * @param $tarefa
 */
function gravarEntrada($conexao, $tarefa)
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