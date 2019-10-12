<?php
    require "conexao/conexao.php";
    if(isset($_POST['insert'])){
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['password'];
        $hash = md5($senha);
        $sql = "INSERT INTO usuarios(nome, login, senha) VALUES('$nome', '$login', '$hash')";
        $resultado = mysqli_query($conexao, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operação Inserir</title>
</head>
<body>
    <form action="insert.php" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit" name="insert">Cadastrar</button>
    </form>
    <button><a href="usuarios.php">Voltar</a></button>
</body>
</html>
            