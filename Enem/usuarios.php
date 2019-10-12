<?php
    require "header.php";
?>
<?php
    require "conexao/conexao.php";
    echo "<table align=center border=1 width=100%>";
  echo "<tr><td align=center colspan=6> Usuários</td>";
  echo "</tr>";
  echo "<td><b>Atualizar</b></td>";
  echo "<td><b>Deletar</b></td>";
  echo "<td><b>ID</b></td>";
  echo "<td><b>Nome</b></td>";
  echo "<td><b>Login</b></td>";
  echo "<td><b>Senha</b></td>";
  echo "</tr>";

  // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
  $query = "SELECT * FROM usuarios WHERE id > 1 ORDER BY id ";
  $resultado = mysqli_query($conexao,$query);
  $resultCheck = mysqli_num_rows($resultado);
  if($resultCheck > 0){
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td width=50><button><a href='update.php?id=".$linha['id']. "'>Atualizar</a></button>";
        echo "</td>";
        echo "<td width=50><button><a href='delete.php?id=".$linha['id']. "'>Deletar</a></button>";
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
  echo "<button><a href='insert.php'>Incluir</a>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";


  mysqli_close($conexao);
?>

<?php
    require "footer.php";
?>