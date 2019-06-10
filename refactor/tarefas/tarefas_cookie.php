<?php
setcookie('lista_tarefas');

if (isset($_GET['nome'])) {
	$_COOKIE['lista_tarefas'][] = $_GET['nome'];
}

# Array de tarefas
$lista_tarefas = array();

if (isset($_COOKIE['lista_tarefas'])) {
	$lista_tarefas = $_COOKIE['lista_tarefas'];
}

include "template.php";