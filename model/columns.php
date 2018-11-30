<?php
/**
 * Created by PhpStorm.
 * User: Dataka05
 * Date: 30/11/2018
 * Time: 15:50
 */
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
        ?><img src="img/images/elnido.jpg" class="imagenArticulo" alt="Imagen de el nido" title="El nido/>"
        </div><?php
    }
    $i++;
}
