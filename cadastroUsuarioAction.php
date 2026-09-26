<?php

$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];
$confirmaSenha = $_POST['txtConfirmaSenha'];

if ($senha != $confirmaSenha) {
    echo '
    <div style="text-align: center;">
        <h1 class="w3-button w3-red">
            As senhas não conferem!
        </h1>
        <br>
        <a href="cadastroUsuario.php">
            Tentar novamente
        </a>
    </div>
    ';
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwii";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

$sql = "SELECT * FROM usuario WHERE nome = '".$nome."';";

$resultado = $conexao->query($sql);

$linha = mysqli_fetch_array($resultado);

if ($linha != null) {

    echo '
    <div style="text-align: center;">
        <h1 class="w3-button w3-orange">
            Usuário já cadastrado!
        </h1>
        <br>
        <a href="index.php">
            Voltar para Login
        </a>
    </div>
    ';

} else {

    $sql = "INSERT INTO usuario (nome, senha)
            VALUES ('".$nome."', '".$senha."');";

    if ($conexao->query($sql) === TRUE) {

        echo '
        <div style="text-align: center;">
            <h1 class="w3-button w3-teal">
                Cadastro realizado com sucesso!
            </h1>
            <br>
            <a href="index.php">
                Ir para Login
            </a>
        </div>
        ';

    } else {

        echo "Erro ao cadastrar: " . $conexao->error;

    }
}

$conexao->close();

?>