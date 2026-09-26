<?php

session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet"
          href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Projeto - MYSQLI</title>
</head>

<body>

<div class="w3-padding w3-text-grey w3-half w3-display-middle w3-center">

    <h1 class="w3-center w3-teal w3-round-large w3-margin">
    Projeto Lista de Amigos
</h1>

<!-- Moldura da imagem -->
<div class="w3-teal w3-round-large w3-padding w3-margin">
    <img src="amigos.jpg" 
         alt="Lista de Amigos" 
         class="w3-round-large"
         style="width:100%; max-height:220px; object-fit:cover;">
</div>

<div class="w3-row">

    <div class="w3-row">

        <div class="w3-col w3-button w3-teal w3-cell w3-round-large"
             style="width:45%;">

            <a href="cadastro.php" style="text-decoration: none;">

                <i class=" fa fa-user-plus"
                   style="font-size: 10.5em"></i>

                <p style="font-size: 2em">
                    Adicionar
                </p>

            </a>

        </div>

        <div class="w3-col w3-button w3-teal w3-cell w3-round-large w3-right"
             style="width:45%;">

            <a href="listar.php" style="text-decoration: none;">

                <i class="fa fa-vcard-o"
                   style="font-size: 10.5em"></i>

                <p style="font-size: 2em">
                    Listar
                </p>

            </a>

        </div>
        <div class="w3-row w3-margin-top">

        <div class="w3-col w3-button w3-teal w3-cell w3-round-large w3-center"
             style="width:10%; float:none;">

            <a href="logout.php" style="text-decoration: none;">

                <i class="fa fa-sign-out"
                    style="font-size: 6em"></i>

                <p style="font-size: 1em">
                Sair
                </p>

            </a>

         </div>
    </div>

</div>

</body>
</html>

