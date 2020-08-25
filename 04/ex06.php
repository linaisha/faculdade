<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h1>Aula 04- Exercício 06</h1>

	<a href="index.php">Voltar para a Home</a>

	<h3>6. Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão: F ← (9*C+160)/5</h3>

	<form action="ex06.php" method="post">

		<p>
			<label>Temperatura em Celsius:</label>
			<input type="number" name="c" placeholder="Cº">
		</p>
		<p>
			<button type="submit">Converter</button>
			<button type="reset">Apagar</button>
		</p>

	</form>

	<?php 

	$c = $_POST['c'];

	if (isset($_POST['c']) && is_numeric($_POST['c']))
	{

		$f = (9*$c+160) / 5;

		echo "<p>$c º Celsius = $f º Fahrenheit</p>";
	}
	else
	{
		echo "<p> Informe a temperatura em Celsius para ver resultado da conversão.</p>";
	}
	?>

</body>
</html>