<h1>Testando</h1><hr>
<form action="index.php?id=testando" method="post" name="f" onsubmit="return validar(f,1);">



</form>
<hr>

<?php
	$ast=1; 
		for ($1=1, $1<=3; $1++) 
		{ 
			for ($c=1, $c<=$ast; $c++) 
			{ 
				echo “ * ”; 
			} 
			echo “<br> ”; 
			$ast+=2; 
		}


?>