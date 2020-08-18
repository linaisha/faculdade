<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 05</title>
</head>
<body>

	<h1>Aula 03 - Exercício 05</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Calcular a idade de uma pessoa, tendo em vista que a mesma irá digitar o ano do seu nascimento. 
	</p>

	<form action="ex05.php" method="get">

		<p>
			<label for="yeara">Ano atual:</label><br>
			<input type="number" name="yeara" id="yeara">
		</p>
		
		<p>
			<label for="yearb">Ano de seu nascimento:</label><br>
			<input type="number" name="yearb" id="yearb">
		</p>

		<p>
			<button type="insert">Calcular idade</button>
			<button type="reset">Apagar</button>
		</p>

	</form>

	<?php

	if(!empty($_GET['yeara']) && !empty($_GET['yearb']))
	{
		$yeara = $_GET['yeara'];
		$yearb = $_GET['yearb'];

		$idade = $yeara - $yearb;

		echo "<p>A sua idade é: $idade anos</p>";
	}

	?>

</body>
</html>