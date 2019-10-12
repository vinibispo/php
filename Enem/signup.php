<?php
    require "header.php";
?>
<main>
    <div>
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
</main>
<?php
    require "footer.php";
?>