<?php

// Dados para conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "agenda6";

// Cria a conexão
$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {

    die(
        "Erro na conexão com o banco de dados: "
        . $conexao->connect_error
    );
}

// Define o conjunto de caracteres
$conexao->set_charset("utf8mb4");

?>

