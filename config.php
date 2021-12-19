<?php

// CONEXAO A DATABASE::::::

//VARIAVEIS:
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'teste_todo_db';

// CONEXAO:
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//TEST: 
// if($conexao->connect_errno)
// {
//     echo "ERRO";
    // VARDUMP PARA SABER O ERRO
//     var_dump($conexao->connect_errno);
// }
// else 
// {
//     echo "FEITO!";
// }
?>