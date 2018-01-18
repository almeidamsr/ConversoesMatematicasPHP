<h1>an</h1><hr>
<form action="index.php?id=potencia" method="post" name="f" onsubmit="return validar(f,1);">
Entre com o número:
<input type="number" name="num"> <hr>
Entre com o coeficiente:
<input type="number" name="num2"> <hr>

<input type="submit" value="Verificar">
</form>
<hr>

<?php
    @$n = $_POST["num"];
	@$n2 = $_POST["num2"];
	
	if(!empty($n) && !empty($n2)) 
	{	
		$result=1;
		
		
		for ($cont=1;$cont<=$n2;$cont++){
			$result=$n*$result;
		
		}
		echo "Resultado $result";
	}
?>