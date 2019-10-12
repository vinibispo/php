<?php
    require "conexao/conexao.php";
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        if(isset($_POST['update'])){
            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $query = "UPDATE `usuarios` set `nome`='$nome' AND `login`='$login' where `id`= '$id'";
            $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
            header("Location: usuarios.php");
        }
        elseif (isset($_POST['delete'])) {
            $query = "DELETE FROM usuarios WHERE id='$id'";
            $resultado = mysqli_query($conexao, $query);
            header("Location: usuarios.php");
        }
        elseif(isset($_POST['insert'])){
            $senha = $_POST['senha'];
            $hash = md5($senha);
            $query = "INSERT INTO usuarios(nome,login,senha) VALUES('$nome', '$login', '$hash')";
            $resultado = mysqli_query($conexao, $query);
            header("usuarios.php");

        }
    }