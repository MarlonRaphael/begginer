<?php

session_start();

if (isset($_GET['nome']) && !empty($_GET['nome'])) {
	
	$contato = array();
	
	# Capturando nome
	$contato['nome'] = $_GET['nome'];
	
	# Capturando telefone
	if (isset($_GET['telefone'])) {
		$contato['telefone'] = $_GET['telefone'];
	} else {
		$contato['telefone'] = '';
	}
	
	# Capturando email
	if (isset($_GET['email'])) {
		$contato['email'] = $_GET['email'];
	} else {
		$contato['email'] = '';
	}
	
	# Capturando descricao
	if (isset($_GET['descricao'])) {
		$contato['descricao'] = $_GET['descricao'];
	} else {
		$contato['descricao'] = '';
	}
	
	# Capturando favorito
	$contato['favorito'] = $_GET['favorito'];
	
	# Capturando data de nascimento
	if (isset($_GET['datanasc'])) {
		$contato['datanasc'] = $_GET['datanasc'];
	} else {
		$contato['datanasc'] = '';
	}
	
	# Guardando contato na sessão
	$_SESSION['lista_contatos'][] = $contato;
	
}

$lista_contatos = array();

if (isset($_SESSION['lista_contatos'])) {
	$lista_contatos = $_SESSION['lista_contatos'];
}

include "template.php";