<div class="menuHeader">
	<div class="ancho">
		<div class="clMenu menuLogo">
			Laravel
		</div>
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
			<table border="0"  style="margin-top: 0.3em; width=60%;">
				<tr>
				<?php
				if($env!="home" and $env!=""){
				?>
					<td>
						<a href="?env=home">
							Home
						</a>
					</td>
				<?php
				}
				if($env!="ofertas"){
				?>
					<td class="menuOption">
						<a href="?env=ofertas">
							Ofertas
						</a>
					</td>
					<?php
				}if($env!="cama"){?>
					<td class="menuOption">
						<a href="?env=cama">
							Mi Cama
						</a>
					</td>
				<?php
				}if($env!="casa"){?>
					<td class="menuOption">
						<a href="?env=casa">
							Mi Casa
						</a>
					</td>
				<?php
				}
				?>
				</tr>
			</table>
		</div>
	</div>
</div>