<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 09</title>
</head>
<body>

	<h1>Aula 03 - Exercício 09</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Calcular e apresentar o volume de uma lata de óleo cilíndrica, a partir da leitura do raio da base e da altura. A fórmula: pi * raio² * altura. 
	</p>

	<form action="ex09.php" method="get">

		<p>
			<label for="r">Raio:</label><br>
			<input type="number" name="r" id="r">
		</p>

		<p>
			<label for="h">Altura:</label><br>
			<input type="number" name="h" id="h">
		</p>

		<p>
			<button type="insert">Calcular</button>
			<button type="reset">Apagar</button>
		</p>
		<?php
		if(!empty($_GET['r']) && !empty($_GET['h']))
		{
			$r = $_GET['r'];
			$h = $_GET['h'];
			$pi = (3.14);

			$volume = $pi * $r * $r * $h;

			echo "<p>O volume da lata de óleo cilíndrica é $volume.</p>";
		}

		?>
		
	</form>

</body>
</html>