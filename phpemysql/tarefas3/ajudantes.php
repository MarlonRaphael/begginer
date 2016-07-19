<?php

//Função para traduzir prioridade de int para string
function traduz_prioridade($codigo){

    $prioridade = '';
    switch($codigo){
        case 1:
            $prioridade = "Baixa";
            break;
        case 2:
            $prioridade = "Média";
            break;
        case 3:
            $prioridade = "Alta";
            break;
    }
    return $prioridade;
}

//Função para traduzir data para banco
function traduz_data_para_banco($data){
    if($data == ''){
        return "";
    }
    $dados = explode("/", $data);
    $data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
    return $data_mysql;
}

//Função para traduzir data para exibição
function traduz_data_para_exibir($data){
    if($data == "" OR $data == "0000-00-00"){
        return "";
    }
    $dados = explode("-", $data);
    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
    return $data_exibir;
}

//Função para traduzir concluidas
function traduz_concluida($concluida){
    if($concluida == 1){
        return 'Sim';
    }
    return 'Não';
}