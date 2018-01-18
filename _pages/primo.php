<h1>Número Primo</h1><hr>
<form action="index.php?id=primo" method="post" name="f" onsubmit="return validar(f,1);">
Entre com o número:
<input type="number" name="num"> <hr>
<input type="submit" value="Verificar">
</form>
<hr>

<?php
    //  0 1 1 2 3 5 8 13 21 34
    @$n = $_POST["num"]; // números de termos para mostrar
	
	if(!empty($n)) // Se a variável 'n' não estiver vazia... 
	{	
		$flag = 1;
	
		echo "Valor = $n <br>";
		
		for($cont=2;$cont<$n;$cont++)
		{
			if($n % $cont == 0)
			{
				$flag =0;
				break;
			}
		}
	
		if($flag==1) echo "É Primo!";
		else echo "Nao é Primo!";
	}
?>
