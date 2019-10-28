<?php
require "conexao/conexao.php";
require "header.php";
?>
<main>
    <div class="container mt-5" style= "background-color: #fff; border-left: 2px solid #000; border-right: 2px solid #000; width: 73%; border: 2px solid #000; padding-top: 30px; height:700px;">
        <section>
<?php
    if ($_SESSION['login']){
        $login = $_SESSION['login'];
        if($login == "admin"){
            echo "<table>";
            echo "<td><b>Deletar</b></td>";
  echo "<td><b>ID</b></td>";
  echo "<td><b>Enunciado</b></td>";
  echo "<td><b>Imagem</b></td>";
  echo "<td><b>Alternativa A</b></td>";
  echo "<td><b>Alternativa B</b></td>";
  echo "<td><b>Alternativa C</b></td>";
  echo "<td><b>Alternativa D</b></td>";
  echo "<td><b>Alternativa E</b></td>";
  echo "<td><b>Alternativa Correta</b></td>";
  echo "<td><b>Senha</b></td>";
  echo "</tr>";

  // Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
  $query = "SELECT * FROM questoes ORDER BY id ";
  $resultado = mysqli_query($conexao,$query);
  $resultCheck = mysqli_num_rows($resultado);
  if($resultCheck > 0){
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td width=50><button><a href='photo/update.php?id=".$linha['id']. "'>Atualizar</a></button>";
        echo "</td>";
        echo "<td width=50><button><a href='photo/delete.php?id=".$linha['id']. "'>Deletar</a></button>";
        echo "</td>";
        echo "<td>".$linha['id']."</td>";
        echo "<td>".$linha['Enunciado']."</td>";
        if(isset($linha['imagem'])){
            echo "<td><img src='".$linha['imagem']."'</td>";
        }
        else {
            echo "<td>Não há imagem</td>";
        }
        echo "<td>".$linha['alternativaA']."</td>";
        echo "<td>".$linha['alternativaB']."</td>";
        echo "<td>".$linha['alternativaC']."</td>";
        echo "<td>".$linha['alternativaD']."</td>";
        echo "<td>".$linha['alternativaE']."</td>";
        echo "<td>".$linha['alternativaCorreta']."</td>";
        echo "</tr>";
         
        }
    }
    echo "<tr>";
    echo "<td colspan=12>";
    echo "<button><a href='photo/insert.php'>Incluir</a>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";


    mysqli_close($conexao);
        }
  
?>

<?php
    require "footer.php";
    }
?>