<?php
require "header.php";
?>
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
<main>
    <div class="container mt-5" style= "background-color: #fff; border-left: 2px solid #000; border-right: 2px solid #000; width: 73%; border: 2px solid #000; padding-top: 30px; height:700px;">
        <section>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="login" placeholder="Login">
        <button type="submit" name="update">Atualizar</button>
    </form><br>
    <button><a href="usuarios.php">Voltar</a></button>
   </section>
   </div>
   </main>

<?php
    require "footer.php";
    
?>