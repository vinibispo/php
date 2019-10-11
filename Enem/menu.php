<?php
    if(isset($_POST['senha']) && isset($_POST['nome'])){
        $name = $_POST['nome'];
        $pass = $_POST['senha'];
        if ($name == "admin" && $pass == "admin"){
            echo '<!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Menu</title>
            </head>
            <body>
                <ul>
                    <li><a href="questoes.php"></a>QUESTÕES</li>
                    <li><a href="respostas.php">RESPOSTAS</a></li>
                    <li><a href="users.php">USUÁRIOS</a></li>
                </ul>
            </body>
            </html>';
        }
        else{
            require "conexao/conexao.php";
            $query = mysqli_query($conexao,"SELECT *  FROM usuarios where `login` = '$name' AND senha = '$pass'") or die(mysql_error());
	        $row = mysqli_fetch_array($query);
	    if(!empty($row['login']) AND !empty($row['senha']))
	    {
            
        }
        else {
            echo '<!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Cadastro</title>
            </head>
            <body>
                <form action="cadastrar.php" method="post"></form>
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit">Enviar</button>
            </body>
            </html>';
        }
        }
    }
?>

