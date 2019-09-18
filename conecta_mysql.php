<?php
    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'alunos_escola';

    $conexao = mysqli_connect($hostname, $user, $password, $db_name);

    mysqli_set_charset($conexao, 'utf8');

    if($conexao->connect_error){
        die("Falha ao realizar conexao: " . $conexao->connect_error);
    }
?>