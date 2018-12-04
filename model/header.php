<?php
namespace model;
?>
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
<div class="menuHeader">
	<div class="ancho">
        <?php
        import /model/menu;
        $menu=new menu();
        $menu->addLogo();
        ?>
		<div class="clMenu actualPage">
			<center>
			<?php
				if($env==""){
					print_r("HOME");
				}else{
					print_r(strtoupper($env));
				}
			?>
			</center>
		</div>
		<div class="clMenu cloptions">
			<?php
			include("texts/menuOpts.php");
			?>
		</div>
	</div>
</div>