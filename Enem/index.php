<?php
    require "header.php";
?>
<main>
    <div class="container mt-5" style= "background-color: #fff; border-left: 2px solid #000; border-right: 2px solid #000; width: 73%; border: 2px solid #000; padding-top: 30px; height:700px;">
        <section>
        <?php
            if (isset($_SESSION['login'])) {
                echo '<b><center><p>Você logou!</p></center></b>';
            }
            else {
                echo '<b><center><p>Você não está logado</p></center></b>';
            }
        ?>
        <ul style="font-size:18px;">
               <?php
                       if($_SESSION['login'] == "admin"){
                           echo '<li><a style="color:#000"href="index.php">Início</a></li>
                           <li><a style="color:#000"href="questoes.php?login=admin">Questões</a></li>
                           <li><a style="color:#000" href="usuarios.php" >Usuários</a></li>';
                       } 
                       elseif($login="success"){
                           echo '<li><a style="color:#000"href="index.php">Início</a></li>
                           <li><a style="color:#000"href="usuarios.php">Usuários</a></li>
                           <li><a style="color:#000"href="questoes.php?login=success">Questões</a></li>';
                       }
               ?>
           </ul>
        </section>
   <center><img  src="img/enem1.jpg" class="img-fluid mt-5" style="border:2px solid #000;" /><center>
   
    </div>
</main>



<?php
    require "footer.php";
?>