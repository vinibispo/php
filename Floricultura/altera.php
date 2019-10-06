<?php
  
  $codigo=$_POST["codigo"];
  $nome=$_POST['nome'];
  $local=$_POST['local'];
  $vasojardim = $_POST['vasojardim'];
  
  echo "<form name=form1 method=post action=fazer.php>";
  echo "<input type=hidden name=codigo value=".$codigo.">";
  echo "Nome: <input type=text name=nome value=".$nome."><br>";
  echo "Local: <input type=text name=local value=".$local."><br>";
  ?>
<input type="radio" name="vasojardim"  value="Vaso" <?php if($vasojardim == 'Vaso'){ echo "checked";} ?>> Vaso
<input type="radio" name="vasojardim"  value="Jardim" <?php if($vasojardim == 'Jardim'){ echo "checked";} ?>> Jardim
<?php
  echo "<input type=submit name=acao value=Alterar> ";
  echo "<input type=submit name=acao value=Cancelar>";
  echo "</form>";

?>

