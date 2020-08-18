<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 04</title>
</head>
<body>

	<h1>Aula 03 - Exercício 04</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Calcular o volume de uma caixa (largura, altura, comprimento). 
	</p>

	<form action="ex04.php" method="get">

		<p>
			<label for="l">Largura:</label><br>
			<input type="number" name="l" id="l">
		</p>

		<p>
			<label for="h">Altura:</label><br>
			<input type="number" name="h" id="h">
		</p>

		<p>
			<label for="c">Comprimento:</label><br>
			<input type="number" name="c" id="c">
		</p>

		<p>
			<button type="insert">Calcular</button>
			<button type="reset">Apagar</button>
		</p>
		
	</form>

	<?php

	if(!empty($_GET['l']) && !empty($_GET['h']) && !empty($_GET['c']))
	{
		$l = $_GET['l'];
		$h = $_GET['h'];
		$c = $_GET['c'];

		// multiplicar alura, comprimento e largura
		$volume = $l * $h * $c;

		echo "<p>O volume da caixa de largura $l, altura $h e comprimento $c é de $volume</p>";

	}

	?>

</body>
</html>