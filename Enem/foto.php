<?php
    if (isset($_FILES['fileUpload'])) {
        $ext = strtolower(substr($_FILES['fileUpload']['name'], -4));
        if ($ext == '.jpg' or $ext='.jpeg' or $ext='.png')
        $novonome = date("Y.m.d-H.i.s").$ext;
        $dir = 'uploads/';
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$novonome);
    }
?>
<form action="foto.php" method="post" enctype="multipart/form-data">
    Código<input type="text" name="codigo">
    <input type="file" name="fileUpload">
    <input type="submit" value="Enviar">
</form>
<?php
    require "conexao/conexao.php";
    if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];
        $sql ="UPDATE planta SET foto='$novonome' WHERE codigo='$codigo'";
        $resultado = mysqli_query($conexao,$sql) or die (mysqli_error($conexao));
         mysqli_close($conexao);
         header("Location: index.php");
    }
    