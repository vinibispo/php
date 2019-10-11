<?php
$conexao = mysqli_connect("localhost","root","","enem");
if (!$conexao){
    die("Não foi possível conectar no banco de dados ". mysqli_connect_error());
}
?>