<?php
    require "header.php";
    
?>
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
<main>
    <div class="container mt-5" style= "background-color: #fff; border-left: 2px solid #000; border-right: 2px solid #000; width: 73%; border: 2px solid #000; padding-top: 30px; height:700px;">
        <section>
    <form action="insert.php" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit" name="insert">Cadastrar</button>
    </form>
    <br>
    <button><a href="usuarios.php">Voltar</a></button>
</section>
</div>
</main>
<?php
    require "footer.php";
    
?>
            