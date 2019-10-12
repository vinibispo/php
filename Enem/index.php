<?php
    require "header.php";
?>
<main>
    <div>
        <section>
        <?php
            if (isset($_SESSION['login'])) {
                echo '<p>Você logou!</p>';
            }
            else {
                echo '<p>Você não está logado</p>';
            }
        ?>
        </section>
    </div>
</main>



<?php
    require "footer.php";
?>