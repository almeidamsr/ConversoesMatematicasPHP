<h1>Media aritimetica das notas</h1><hr>

<form action="index.php?id=media" name="f" method="post" onsubmit="return validar(f,1);">
Entre com a nota 1:
<input type="number" name="nota"> <hr>
Entre com a nota 2:
<input type="number" name="nota1"> <hr>
Entre com a nota 3:
<input type="number" name="nota2"> <hr>

<input type="submit" value="Calcular">

</form>      
<hr>

<?php
 @$n = $_POST["nota"];
 @$n1 = $_POST["nota1"];
 @$n3 = $_POST["nota2"];
 
 
 if(!empty($n) && !empty($n1) && !empty($n3))
	 
	 {
		 $result=$n+$n1+$n3;
		 $result=$result/3;
		 
		 if ($result>6)
			echo "Aprovado $result";

		 else
			echo "Reprovado $result";
	}
?>