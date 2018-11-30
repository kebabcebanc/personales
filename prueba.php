<?php
$i=1;
if (isset($_GET['env'])){
    $env=$_GET['env'];
}
include ("model/header.php");
?>

<div id="principal">
    <?php
        include ("model/carrousel.php");
        include("model/columns.php");
        include ("model/login.html");
    ?>
    </div>
</div>
<script src="js/prueba.js"></script>
</center>
</body>
<footer class="bgfooter">
    <?php
    readfile("model/footer.html");
    ?>
