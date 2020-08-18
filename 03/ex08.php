<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 08</title>
</head>
<body>

	<h1>Aula 03 - Exercício 08</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão: F ← (9*C+160)/5 
	</p>

	<form action="ex08.php" method="get">

		<p>
			<label for="c">Graus em Celsius:</label><br>
			<input type="number" name="c" id="c">
		</p>

		<p>
			<button type="insert">Converter temperatura</button>
			<button type="reset">Apagar</button>
		</p>
		
	</form>
	<?php
	if(!empty($_GET['c']))
	{
		$c = $_GET['c'];
		$f = (9*$c+160)/5;

		echo "<p>$c ºC em Fahrenheit é $f ºF.</p>";

	}


	?>

</body>
</html>