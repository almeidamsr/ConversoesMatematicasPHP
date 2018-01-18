<h1>Desconto</h1><hr>
<form action="index.php?id=desconto" method="post" name="f" onsubmit="return validar(f,1);">
Entre com o valor da mercadoria:
<input type="number" name="num"> <hr>
Entre com a porcentagem de desconto:
<input type="number" name="num2"> <hr>

<input type="submit" value="Calcular">
</form>
<hr>

<?php
    @$n = $_POST["num"];
	@$n2 = $_POST["num2"];
	
	if(!empty($n) && !empty($n2)) 
	{	
	
	$n2=$n2/100;
	$result=$n2*$n;
	
	echo "Valor co desconto $result";
	
	}
?>