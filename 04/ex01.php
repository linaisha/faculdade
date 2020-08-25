<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 04 - Ex01</title>
</head>
<body>

	<h1>Aula 04 - Exercício 01</h1>

	<a href="index.php">Voltar para Home</a>
	<h3>1. Calcular o aumento que será dado a um funcionário, obtendo do usuário as seguintes informações: salário atual e a porcentagem de aumento. Apresentar o novo valor do salário e o valor do aumento.</h3>

	<form action="ex01.php" method="post">

		<p>
			<label for="salario">Informe o salário do funcionário:</label><br>
			<input type="number" name="salario" id="salario" placeholder="Salário R$" step="0.01" min="1">
		</p>

		<p>
			<label for="porcentagem">Informe a porcentagem de aumento:</label><br>
			<input type="number" name="porcentagem" id="porcentagem" placeholder="Porcentagem %" step="0.01" min="1" >
		</p>

		<p>
			<button type="submit">Enviar</button>
			<button type="reset">Apagar</button>
		</p>

	</form>

	<?php

	if (isset($_POST['salario']) && isset($_POST['porcentagem'])) 
	{
		$salario = $_POST['salario'];
		$porcentagem = $_POST['porcentagem'];

		$aumento = $salario * ($porcentagem/100);
		$salario_final = $salario + $aumento;
		$salario = number_format($salario,2, ",", ".");
		$aumento = number_format($aumento,2,',','.');
		$salario_final = number_format($salario_final,2,',','.');


		echo "<p>";
		echo "Salário: R$ $salario<br>";
		echo "Aumento : R$ $aumento ($porcentagem %)<br>";
		echo "Salário Final: R$ $salario_final<br>";
		echo "</p>";
	}

	?>

</body>
</html>