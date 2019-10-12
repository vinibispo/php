<?php
    if (isset($_POST['login-button'])) {
        require "../conexao/conexao.php";
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        echo "$login, $senha";
        if(empty($login) || empty($senha)){
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else {
        $sql = "SELECT * FROM usuarios WHERE `login`=?;";
            $stmt = mysqli_stmt_init($conexao);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $login);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    foreach ($row as $key => $value) {
                        echo $key . "=>" . $value . "<br>";
                    }
                    $hash = password_hash($senha, PASSWORD_DEFAULT);
                    echo $hash;
                    if(hash_equals($row['senha'],$hash)){
                        session_start();
                        $_SESSION['login'] = $row['login'];
                        header("Location: ../index.php?success=true");
                        exit();
                    }
                    else {
                        // header("Location: ../index.php?error=wrongpass");
                        // exit();
                    }
                }
                else {
                    // header("Location: ../index.php?error=nouser");
                    // exit();
                }
            }
        }
    }
    else {
        header("Location: ../index.php");
    }