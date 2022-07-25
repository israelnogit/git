<?php

// CONFIGURACOES GERAIS
$servidor="localhost";
$usuario="israel";
$senha="45126612149865";
$banco="dbsql";

//CONEXAO
$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

//Função para limpar Entrada
function limparPost($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}


