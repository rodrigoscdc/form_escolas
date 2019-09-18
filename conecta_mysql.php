<?php
    $hostname = 'localhost';
    $user = '';
    $password = '';
    $db_name = '';

    $conexao = mysqli_connect($hostname, $user, $password, $db_name);

    mysqli_set_charset($conexao, 'utf8');

    if($conexao->connect_error){
        die("Falha ao realizar conexao: " . $conexao->connect_error);
    }
?>