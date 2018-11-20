<html>
	<head>
		<link rel="stylesheet" type="text/css" href="prueba.css">
		<link rel="stylesheet" type="text/css" href="carrousel.css">
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
				include ("header.php");
			?>
			
			<div id="principal">
				<div>
					<div class="carrouCont" id="carrousel-container">
						<?php
						$i=0;
						while ($i <3) {
							?>
							<div class="slides fade" style="height: 30em;">
								<img src="resources/images/elnido.jpg" style="height: 30em; width: 100%">
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
								echo("<img src=\"resources/images/elnido.jpg\" class=\"imagenArticulo\" alt=\"Imagen de el nido\" title=\"El nido\"/>");
								echo ("</div>");
							}
							$i++;
						}
						?>
						<div class="column1">
							<div class="login">
								Login:
								<br/>
								<input type="text" name="prueba" class="introData">
								<br/>
								Password:
								<br/>
								<input type="password" name="prueba2" class="introData">
								<br/>
								<input type="submit" name="Send">
							</div>
						</div>

				</div>
			</div>
		</center>
	<script src="prueba.js"></script>
	</body>
	<footer class="bgfooter">
		<?php
			readfile("footer.html");
		?>
	</footer>
</html>