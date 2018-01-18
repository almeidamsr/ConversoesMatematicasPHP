<h1>Intervalo</h1><hr>

<form action="index.php?id=intervalo" method="post">
	
	Entre com o limite inferior:
	<input type="number" name="num"> <hr>
	Entre com o limite superior:
	<input type="number" name="num2"> <hr>
	<input type="submit" value="Calcular">
	
</form>
<hr>

	<?php
		@$n = $_POST["num"];
		@$n2 = $_POST["num2"];
		
	?>