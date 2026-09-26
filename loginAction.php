<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">

    <link rel="stylesheet"
          href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>

</head>

<body>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

<?php

$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwii";

$conexao = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

if ($conexao->connect_error) {

    die("Connection failed: " . $conexao->connect_error);

}

$sql = "SELECT * FROM usuario WHERE nome = '".$nome."';";

$resultado = $conexao->query($sql);

$linha = mysqli_fetch_array($resultado);

if ($linha != null)
{

    if ($linha['senha'] == $senha)
    {

        // Guarda o nome do usuário na sessão
        $_SESSION['usuario'] = $nome;

        echo '
        <a href="principal.php"
           style="text-decoration: none;">

            <h1 class="w3-button w3-teal w3-round-large">
                Olá,'.$nome.', Seja Bem-Vinda(o)!
            </h1>

        </a>
        ';

    }
    else
    {

        echo '
        <a href="index.php"
           style="text-decoration: none;">

            <h1 class="w3-button w3-red w3-round-large">
                Login Inválido!
            </h1>

        </a>
        ';

    }

}
else
{

    echo '
    <a href="index.php"
       style="text-decoration: none;">

        <h1 class="w3-button w3-red w3-round-large">
            Login Inválido!
        </h1>

    </a>
    ';

}

$conexao->close();

?>

</div>

</body>
</html>
