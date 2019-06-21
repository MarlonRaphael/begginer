<?php

/**
 * Arquivo com funções helpers compartilhadas
 */

/**
 * Tradução de prioridade | integer to string
 * @param $codigo
 * @return string
 */
function traduzPrioridade($codigo)
{
	$prioridade = '';
	
	switch ($codigo) {
		case 1:
			$prioridade = 'Baixa';
			break;
		case 2:
			$prioridade = 'Média';
			break;
		case 3:
			$prioridade = 'Alta';
			break;
	}
	
	return $prioridade;
}

/**
 * Conversão de data para formato de banco
 * @param $data
 * @return array|string
 */
function traduzDataHoraBanco($data)
{
	if ($data == '') {
		return '';
	}
	
	$data_mysql = array_reverse(explode('/', $data));
	
	return $data_mysql;
}

/**
 * Tradução de datas para exibição
 * @param $data
 * @return array|string
 */
function traduzDataParaExibir($data)
{
	$dateTime = new DateTime($data);
	
	if ($data == '' OR $data == '0000-00-00') {
		return '';
	}
	
//	$data_exibir = implode('/', array_reverse(explode('-', $data)));
	$data_exibir = $dateTime->format('d/m/Y');
	
	return $data_exibir;
}

function traduzConcluida($concluida)
{
	if ($concluida == 1) {
		return 'Sim';
	}
	
	return 'Não';
}