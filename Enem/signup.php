<?php
    require "header.php";
?>
<main>
    <div>
        <section>
            <h1>Cadastrar</h1>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="senha" placeholder="Senha">
                <input type="password" name="pass" placeholder="Confirme sua senha">
                <button type="submit" name="signup">Cadastrar</button>
            </form>
        </section>
    </div>
</main>
<?php
    require "footer.php";
?>