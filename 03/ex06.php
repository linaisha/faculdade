<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 06</title>
</head>
<body>

	<h1>Aula 03 - Exercício 06</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Calcular o consumo por litro de um carro, sendo que será informada a quantidade de quilômetros percorrido e a quantidade de litros abastecido. 
	</p>

	<form action="ex06.php" method="get">

		<p>
			<label for="km">Quilometros rodados</label><br>
			<input type="number" name="km" id="km">
		</p>

		<p>
			<label for="l">Litros abastecidos</label><br>
			<input type="number" name="l" id="l">
		</p>

		<p>
			<button type="insert">Calcular</button>
			<button type="reset">Apagar</button>
		</p>
		
	</form>

	<?php

	if(!empty($_GET['km']) && !empty($_GET['l']))
	{
		$km = $_GET['km'];
		$l = $_GET['l'];

		$consumo = $km / $l;

		echo "<p>O consumo do carro é de $consumo litros por km.</p>";
	}


	?>

</body>
</html>