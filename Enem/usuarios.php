<?php
    require "header.php";
?>
<main>
    <div class="container mt-5" style= "background-color: #fff; border-left: 2px solid #000; border-right: 2px solid #000; width: 73%; border: 2px solid #000; padding-top: 30px; height:700px;">
        <section>
<?php
    require "conexao/conexao.php";
    if($_SESSION['login'] == 'admin'){
    echo "<table align=center border=1 width=100%>";
  echo "<tr><td align=center colspan=6> <b>Usuários</b></td>";
  echo "</tr>";
  echo "<td>Atualizar</td>";
  echo "<td >Deletar</td>";
  echo "<td>ID</td>";
  echo "<td>Nome</td>";
  echo "<td>Login</td>";
  echo "<td>Senha</td>";
  echo "</tr>";

  // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
  $query = "SELECT * FROM usuarios WHERE id > 1 ORDER BY id ";
  $resultado = mysqli_query($conexao,$query);
  $resultCheck = mysqli_num_rows($resultado);
  if($resultCheck > 0){
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td width=50><button ><a style='color:#000'href='update.php?id=".$linha['id']. "'>Atualizar</a></button>";
        echo "</td>";
        echo "<td width=50><button><a style='color:#000'href='delete.php?id=".$linha['id']. "'>Deletar</a></button>";
        echo "</td>";
        echo "<td>".$linha['id']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['login']."</td>";
        echo "<td>".$linha['senha']."</td>";
        echo "</tr>";
         
       }
  }
  echo "<tr>";
  echo "<td colspan=6>";
  echo "<button><a style='color:#000'href='insert.php'>Incluir</a>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";


  mysqli_close($conexao);
?>
 </div>
</main>


<?php
    require "footer.php";
} else{
    echo "401 - não autorizado";
    echo "</section>";
}
?>