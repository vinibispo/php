<?php
    require "../conexao/conexao.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM questoes WHERE id='$id'";
        $resultado = mysqli_query($conexao, $query);
        header("Location: ../questoes.php");
    }
?>