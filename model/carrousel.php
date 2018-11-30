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