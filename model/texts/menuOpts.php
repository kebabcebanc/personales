<table border="0"  class="tableMenu">
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
		<td class="menuOption" onclick="menuControler('casa')">
			<a id="casaCL">
				Mi Casa
			</a>
		</td>
	<?php
	}
	?>
	</tr>
</table>