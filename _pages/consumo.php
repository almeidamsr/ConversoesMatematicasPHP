<h1>Consumo</h1><hr>

<form action="index.php?id=consumo" name="f" method="post" onsubmit="return validar(f,1);">
Entre com a quantidade:
<input type="number" name="num"> <hr>
Entre com o valor:
<input type="number" name="num1"> <hr>

<input type="submit" value="Calcular">

</form>      
<hr>

<?php
 @$n = $_POST["num"];
 @$n1 = $_POST["num1"];
 
 if(!empty($n) && !empty($n1))
	 
	 {
		 $result=$n*$n1;
		 
		 echo "Consumo total $result";
	 }
?>