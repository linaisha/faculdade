<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 07</title>
</head>
<body>

	<h1>Aula 03 - Exercício 07</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Calcular a média final de um aluno com base nas suas 4 notas bimestrais. 
	</p>

	<form action="ex07.php" method="get">

		<p>
			<label for="n1">Nota 1</label><br>
			<input type="number" name="n1" id="n1">
		</p>

		<p>
			<label for="n2">Nota 2</label><br>
			<input type="number" name="n2" id="n2">
		</p>

		<p>
			<label for="n3">Nota 3</label><br>
			<input type="number" name="n3" id="n3">
		</p>

		<p>
			<label for="n4">Nota 4</label><br>
			<input type="number" name="n4" id="n4">
		</p>

		<p>
			<button type="insert">Calcular média</button>
			<button type="reset">Apagar</button>
		</p>
		
	</form>

	<?php

	if(!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['n3']) && !empty($_GET['n4']))
	{
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		$n3 = $_GET['n3'];
		$n4 = $_GET['n4'];

		$media = ($n1 + $n2 + $n3 + $n4) / 4;

		echo "<p>A média do aluno é $media</p>";
	}

	?>

</body>
</html>