<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cálculo da Venda</title>
</head>
<body>
	<h1>Cálculo da Venda</h1>

<?php
	if(empty($_POST['cpf']))
	{
	if (!empty($_POST['nome']) && 
	!empty($_POST['nome2']) && 
	!empty($_POST['nome3']) && 
	!empty($_POST['nome4']) && 
	!empty($_POST['opcao']))

	$nome = $_POST['nome'];
	$produto = $_POST['nome2'];
	$preço = $_POST['nome3'];
	$quantidade = $_POST['nome4'];
	$opcao = $_POST['opcao'];

		$total = $preço * $quantidade;

		switch($_POST['opcao'])
		{
			case 'dinheiro':

			$desconto = $total * 0.05;
			$juros = 0;

			break;

			case 'debito':

			$desconto = 0;
			$juros = 0;

			break;

			case 'x3':

			$juros = $total*0.02;
			$desconto = 0;

			break;

			case 'x5':

			$juros = $total*0.05;
			$desconto = 0;

			break;

			default:

		}

		$total1 = $juros - $desconto + $total;


		echo "<p>O total da compra foi de R$ $total1 reais.</p>";
	

	if (empty($_POST['nome']) && 
		empty($_POST['produto']) && 
		empty($_POST['preço']) && 
		empty($_POST['quantidade']) && 
		empty($_POST['opcao']))

	{
		echo "<p>Dados insuficientes para calcular</p>";
	}
	}

	else

	{
		if (!empty($_POST['nome']) && 
	!empty($_POST['nome2']) && 
	!empty($_POST['nome3']) && 
	!empty($_POST['nome4']) && 
	!empty($_POST['opcao']))

	$nome = $_POST['nome'];
	$produto = $_POST['nome2'];
	$preço = $_POST['nome3'];
	$quantidade = $_POST['nome4'];
	$opcao = $_POST['opcao'];

		$total = $preço * $quantidade;

		switch($_POST['opcao'])
		{
			case 'dinheiro':

			$desconto = $total * 0.05;
			$juros = 0;

			break;

			case 'debito':

			$desconto = 0;
			$juros = 0;

			break;

			case 'x3':

			$juros = $total*0.02;
			$desconto = 0;

			break;

			case 'x5':

			$juros = $total*0.05;
			$desconto = 0;

			break;

			default:

		}

		$total1 = $juros - $desconto + $total - 0.03 * $total;


		echo "<p>O total da compra foi de R$ $total1 reais.</p>";
	

	if (empty($_POST['nome']) && 
		empty($_POST['produto']) && 
		empty($_POST['preço']) && 
		empty($_POST['quantidade']) && 
		empty($_POST['opcao']))

	{
		echo "<p>Dados insuficientes para calcular</p>";
	}
	}
	
?>
	

</body>
</html>