<?php

define("HOST", "localhost");
define("USER", "sistematarefas");
define("PASS", "sistema");
define("DBSA", "tarefas");

$conexao = mysqli_connect(HOST, USER, PASS, DBSA);

if(mysqli_connect_errno($conexao)){
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

function buscar_tarefas($conexao){
    $sqlBusca = "SELECT * FROM tarefas ORDER BY prazo ASC";
    $resultado = mysqli_query($conexao, $sqlBusca);
    $tarefas = array();

    while($tarefa = mysqli_fetch_assoc($resultado)){
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa){
    $sqlGravar = "INSERT INTO tarefas VALUES (DEFAULT,'{$tarefa['nome']}', '{$tarefa['descricao']}', '{$tarefa['prazo']}', '{$tarefa['prioridade']}', '{$tarefa['concluida']}')";
    mysqli_query($conexao, $sqlGravar);
}



//FUNÇÃO PARA TESTE DO EXPLODE

//$texto_original = "Frodo;Sam;Merry;Pippin";
//$hobbits = explode(";", $texto_original);
//
//foreach($hobbits as $hobbit){
//    echo $hobbit."<br>";
//}