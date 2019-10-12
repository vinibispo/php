<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
           <a href="#">
               <img src="img/enem.jpg" alt="enem" width="100px" height="100px">
           </a>
           <ul>
               <li><a href="index.php">Início</a></li>
               <li><a href="questoes.php">Questões</a></li>
               <li><a href="usuarios.php" >Usuários</a></li>
           </ul>
           <div class="form">
               <form action="includes/login.inc.php" method="post">
                    <input type="text" name="login" placeholder="Login">
                    <input type="password" name="senha" placeholder="Senha">
                    <button type="submit" name="login-button">Login</button>
                </form>
                <a href="signup.php">Cadastrar</a>
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>
           </div> 
        </nav>
    </header>