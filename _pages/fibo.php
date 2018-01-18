<h1>Serie de Fibonacci</h1><hr>

<form action="index.php?id=fibo" name="f" method="post" onsubmit="return validar(f,1);">
Entre com o número de termos:
<input type="number" name="num"> <hr>
<input type="submit" value="Mostrar">
</form>      
<hr>

<?php
    //  0 1 1 2 3 5 8 13 21 34
   @$n = $_POST["num"]; // números de termos para mostrar
	
	if(!empty($n))   // se o a variavel 'n' não estiver vazia...
	{		
		$p1 = 0;
		$p2 = 1;
		
		echo "$p1 ";
		for($cont=1;$cont<$n;$cont++)
		{
			echo "$p2 ";
			$p2 = $p1 + $p2;   // ou    $soma = $p1 + $p2;
			$p1 = $p2 - $p1;   // $p1 = $p2;   $p2 = $soma;    
		}
	}
?>
