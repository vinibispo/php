<?php
    require "header.php";
?>

<div class="container mt-5" style= "background-color: #fff; border-left: 2px solid #000; border-right: 2px solid #000; width: 73%; border: 2px solid #000; padding-top: 30px; height:700px;">
        <section>
            <h1>Cadastrar</h1>
            <?php
                if(isset($_GET['error'])){
                    $error = $_GET['error'];
                    if($error == "emptyfields"){
                        echo '<p>Preencha todos os campos!</p>';
                    }
                    elseif ($error == "passwordCheck") {
                        echo '<p>As senhas não batem</p>';
                    }
                    elseif ($error == "usertaken") {
                        echo '<p>O usuário já existe';
                    }
                }
                if(isset($_GET['success'])){
                    header("Location: index.php");
                }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="password" placeholder="Senha">
                <input type="password" name="pass" placeholder="Confirme sua senha">
                <button type="submit" name="signup">Cadastrar</button>
            </form>
        </section>
    </div>

<?php
    require "footer.php";
?>