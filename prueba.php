<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/prueba.css">
    <link rel="stylesheet" type="text/css" href="css/carrousel.css">
    <title>
        Prueba
    </title>
</head>
<body>
<center>
<?php
$i=1;
if (isset($_GET['env'])){
    $env=$_GET['env'];
}
include ("model/header.php");
?>

<div id="principal">
    <div>
        <div class="carrouCont" id="carrousel-container">
            <?php
            $i=0;
            while ($i <3) {
                ?>
                <div class="slides fade" style="height: 30em;">
                    <img src="img/images/elnido.jpg" style="height: 30em; width: 100%">
                </div>
                <?php
                $i++;
            }
            ?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

    </div>
    <div class="mainContent">

        <div style="text-align:center">
            <?php
            $i=1;
            while($i<=3){
                ?><span class="dot" onclick="currentSlide(<?php echo $i; ?>)"></span><?php
                $i++;
            }
            ?>
        </div>

        <?php
        $i=1;
        while($i<=3){
            if($i==2){
                echo("<div class=\"conjCol\">");
            }
            echo("<div class=\"column".$i."\">");
            echo("Column ".$i);
            echo("<div class=\"texto\"><br/>Esta es la primera de muchas filas<br/>Y esta la segunda</div>");
            echo("</div>");
            if($i==3){
                echo("<img src=\"img/images/elnido.jpg\" class=\"imagenArticulo\" alt=\"Imagen de el nido\" title=\"El nido\"/>");
                echo ("</div>");
            }
            $i++;
        }
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
</footer>
</html>