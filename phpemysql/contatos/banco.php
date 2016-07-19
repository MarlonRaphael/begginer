<?php

define("HOST","localhost");
define("USER","sistemacontatos");
define("PASS","sistema");
define("DBSA","contatos");

//Variável de conexão com o banco de dados
$conexao = mysqli_connect(HOST, USER, PASS, DBSA);

//Vericando erros na conexao com o banco
if(mysqli_connect_errno($conexao)){
    echo "Problema de conexão com o banco de dados.";
}

function buscar_contatos($conexao){
    $sqlBuscar = "SELECT * FROM contatos ORDER BY nome ASC";
    $resultado = mysqli_query($conexao, $sqlBuscar);
    $contatos = array();
    while($contato = mysqli_fetch_assoc($resultado)){
        $contatos[] = $contato;
    }
    return $contatos;
}

function gravar_contato($conexao, $contato){
    $sqlGravar = "INSERT INTO contatos VALUES (DEFAULT, '{$contato['nome']}', '{$contato['fone']}', '{$contato['mail']}', '{$contato['nasc']}', '{$contato['cfav']}', '{$contato['descricao']}')";
    mysqli_query($conexao, $sqlGravar);
}