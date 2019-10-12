<?php
    require "conexao/conexao.php";
    $id = $_GET['id'];
    if(isset($_POST['update'])){
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $sql = "UPDATE usuarios SET id=$id, nome='$nome', login='$login' WHERE id=$id";
        $result = mysqli_query($conexao, $sql);
        header("Location: usuarios.php");
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
    <form method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="login" placeholder="Login">
        <button type="submit" name="update">Atualizar</button>
    </form>
    <button><a href="usuarios.php">Voltar</a></button>
</body>
</html>