<?php
  
  echo "<form name=form1 method=post action=fazer.php>";
  echo "Nome: <input type=text name=nome maxlength=30><br>";
  echo "Local: <input type=text name=local maxlength=15><br>";
  echo "Vaso ou jardim: <input type=radio name=vasojardim maxlength=15 value=Vaso>Vaso <input type=radio name=vasojardim maxlength=15 value=Jardim>Jardim<br>";
  echo "<input type=submit name=acao value=Incluir> ";
  echo "<input type=submit name=acao value=Cancelar>";
  echo "</form>";

?>

