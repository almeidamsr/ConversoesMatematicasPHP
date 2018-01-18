<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Programação Web</title>
	<meta charset="UTF-8">
		<script src="./_js/valida.js"></script>
	<link rel="stylesheet" type="text/css" href="./_css/estilo.css">
</head>
<body>

<div id="header">
<h1>Programação Web</h1>
</div>

<div id="nav">
<a href="index.php">Home</a><br>
<a href="index.php?id=primo">Número Primo</a><br>
<a href="index.php?id=fibo">Fibonacci</a><br>
<a href="index.php?id=consumo">Consumo</a><br>
<a href="index.php?id=media">Media Aritimetica</a><br>
<a href="index.php?id=potencia">potencia</a><br>
<a href="index.php?id=desconto">Desconto</a><br>
<a href="index.php?id=dolar">Cotação do dolar</a><br>
<a href="index.php?id=intervalo">Intervalos</a><br>
<a href="index.php?id=testando">testando</a><br>
</div>

<?php
	@$id = $_GET["id"];
	$pages["primo"]="./_pages/primo.php";
	$pages["fibo"]="./_pages/fibo.php";
	$pages["consumo"]="./_pages/consumo.php";
	$pages["media"]="./_pages/media.php";
	$pages["potencia"]="./_pages/potencia.php";
	$pages["desconto"]="./_pages/desconto.php";
	$pages["dolar"]="./_pages/dolar.php";
	$pages["intervalo"]="./_pages/intervalo.php";
	$pages["testando"]="./_pages/testando.php";
?>

<div id="section">

<?php
	@include $pages[$id];
?>

</div>

<div id="footer">
Copyright © ProgWeb
</div>

</body>
</html>

<!-- Gravar todos os arquivos em /opt/lampp/htdocs/                  (htdocs é a pasta do servidor web)
     Para executar, Abrir o navegador e na barra de endereço:   http://localhost    -->