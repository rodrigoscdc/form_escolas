<?php
    include_once 'conecta_mysql.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $ano_conclusao = $_POST['conclusao'];
    $curso_interesse = $_POST['interesse'];
    $escola = $_GET['escola'];

    $sql = "INSERT INTO cadastro VALUES";
    $sql .="('$nome', '$email', '$celular', '$endereco', '$numero', '$cidade', '$ano_conclusao', '$curso_interesse', '$escola')";
    
    echo $sql;
    if($conexao->query($sql) === TRUE) {
        echo "Usuário incluido com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
?>