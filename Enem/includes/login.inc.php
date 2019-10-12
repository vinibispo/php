<?php
    if (isset($_POST['login-button'])) {
        require "conexao/conexao.php";
        $nome = $_POST['login'];
        $senha = $_POST['senha'];
        if(empty($nome) || empty($senha)){
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "SELECT * FROM usuarios WHERE login='?' AND senha='?'";
            $stmt = mysqli_stmt_init($conexao);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "ss", $nome, $senha);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $pwdChecked = password_verify($senha, $row['senha']);
                    if($pwdChecked == false){
                        header("Location: ../index.php?error=wrongpass");
                        exit();
                    }
                    elseif ($pwdChecked == true) {
                        session_start();
                        $_SESSION['login'] = $row['login'];
                        $_SESSION['senha'] = $row['senha'];
                        header("Location: ../index.php?success=true");
                        exit();
                    }
                }
                else {
                    header("Location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
    }
    else {
        header("Location: ../index.php");
    }