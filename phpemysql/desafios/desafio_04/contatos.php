<?php
session_start();
if (isset($_GET['nome']) && $_GET['nome'] != '') {
    //Cria o array para guardar os dados do contato
    $contato = array();
    //Atribuindo no índice nome o que vier por parâmetro
    $contato['nome'] = $_GET['nome'];

    //Atribuição do telefone
    if (isset($_GET['fone'])) {
        $contato['fone'] = $_GET['fone'];
    } else {
        $contato['fone'] = '';
    }
    //Atribuição do e-mail
    if (isset($_GET['mail'])) {
        $contato['mail'] = $_GET['mail'];
    } else {
        $contato['mail'] = '';
    }
    //Atribuição do nascimento
    if (isset($_GET['nasc'])) {
        $contato['nasc'] = $_GET['nasc'];
    } else {
        $contato['nasc'] = '';
    }
    //Atribuição do contato favorito
    if (isset($_GET['cfav'])) {
        $contato['cfav'] = $_GET['cfav'];
    } else {
        $contato['cfav'] = '';
    }
    //Atribuição da descrição
    if (isset($_GET['descricao'])) {
        $contato['descricao'] = $_GET['descricao'];
    } else {
        $contato['descricao'] = '';
    }
    //Guardando na sessão 'lista_contatos' o contato informado.
    $_SESSION['lista_contatos'][] = $contato;
}
//Array para atribuição de contatos cadastrados na sessão
if (isset($_SESSION['lista_contatos'])) {
    $lista_contatos = $_SESSION['lista_contatos'];
}else{
    $lista_contatos = array();
}
//Inclusão do template
include('template.php');