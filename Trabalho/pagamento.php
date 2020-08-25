<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade de PHP - Folha de Pagamento</title>
</head>
<body>

	<h1>Atividade de PHP - Folha de Pagamento</h1>

	<h2>Preencha as informações a seguir:</h2>

	<form action="pagamento.php" method="post">

		<p>
			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" placeholder="Nome">
		</p>

		<p>
			<label for="horast">Horas Trabalhadas:</label><br>
			<input type="number" name="horast" id="horast" step="1" placeholder="Horas Trabalhadas">
		</p>

		<p>
			<label for="valorh">Valor da Hora de Trabalho:</label><br>
			<input type="number" name="valorh" id="valorh" step="0.01" placeholder="Valor da Hora de Trabalho">
		</p>

		<button type="insert">Enviar dados</button>
		<button type="reset">Apagar dados</button>
		
	</form>

	<?php 
	if (isset($_POST['nome']) && !empty($_POST['horast']) && !empty($_POST['valorh'])) 
	{
		$nome = $_POST['nome'];
		$horast = $_POST['horast'];
		$valorh = $_POST['valorh'];

		$bruto = $horast * $valorh;
		$fgts = $bruto/100 * 8;

		if ($bruto <= 1372.81) 
		{
			$ir = 0;
		}
		elseif ($bruto <= 2743.25)
		{
			$ir = $bruto/100 * 15;
		}
		elseif ($bruto > 2743.25)
		{
			$ir = $bruto/100 * 27.5;
		}
		
		if ($bruto <= 868.29) 
		{
			$inss = $bruto/100 * 8;
		}
		elseif ($bruto <= 1447.14)
		{
			$inss = $bruto/100 * 9;
		}
		elseif ($bruto <= 2894.28)
		{
			$inss = $bruto/100 * 11;
		}
		elseif ($bruto > 2894.28)
		{
			$inss = 318.37;
		}

		$salliq = $bruto - ($ir + $inss);

		$valorh = number_format($valorh,2,',','.');
		$bruto = number_format($bruto,2,',','.');
		$ir = number_format($ir,2,',','.');
		$inss = number_format($inss,2,',','.');
		$fgts = number_format($fgts,2,',','.');
		$salliq = number_format($salliq,2,',','.');

		echo "<p>";
		echo "Nome: $nome<br>";
		echo "Horas trabalhadas: $horast<br>";
		echo "Valor da hora de trabalho: R$ $valorh<br>";
		echo "Salário bruto: R$ $bruto<br>";
		echo "IR: R$ $ir<br>";
		echo "INSS: R$ $inss<br>";
		echo "FGTS: R$ $fgts<br>";
		echo "Salário líquido: R$ $salliq<br>";
		echo "</p>";
	}

	else

	{
		echo "<p>Preencha todos os campos para efetuar o calculo.</p>";
	}

	?>

	<a href="index.php">Voltar para Home</a>

</body>
</html>