<h1>cotação do dolar</h1><hr>
<form action="index.php?id=dolar" method="post" name="f" onsubmit="return validar(f,1);">
Entre com a cotação do dolar:
<input type="number" name="num"> <hr>
Entre com a quantidade de dolar:
<input type="number" name="num2"> <hr>

<input type="submit" value="Calcular">
</form>
<hr>

<?php
    @$n = $_POST["num"];
	@$n2 = $_POST["num2"];
	
	if(!empty($n) && !empty($n2)) 
	{	

	$result=$n2*$n;
	
	echo "Resultado = $result";
	
	}
?>