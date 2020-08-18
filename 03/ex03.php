<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 03</title>
</head>
<body>

	<h1>Aula 03 - Exercício 03</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Calcular o aumento que será dado a um funcionário, obtendo do usuário as seguintes informações: salário atual e a porcentagem de aumento. Apresentar o novo valor do salário e o valor do aumento.
	</p>

	<form action="ex03.php" method="get">
		
		<p>
			<label for="salat">Salário atual:</label><br>
			<input type="number" name="salat" id="salat">
		</p>

		<p>
			<label for="porc">Porcentagem de aumento:</label><br>
			<input type="number" name="porc" id="porc">
		</p>

		<p>
			<button type="insert">Calcular</button>
			<button type="reset">Apagar</button>
		</p>

	</form>

	<?php
	if(!empty($_GET['salat']) && !empty($_GET['porc']))
	{
		$salat = $_GET['salat'];
		$porc = $_GET['porc'];

		$aumento = $porc / 100 * $salat;
		$novo = $salat + $aumento;

		echo "<p>O aumento foi de $aumento e o novo salário é de R$ $novo reais.</p>";
	}
	?>


</body>
</html>