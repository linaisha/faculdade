<?php
	if (!empty($_POST['nome']) && !empty($_POST['produto']) && !empty($_POST['preco']) && !empty($_POST['quantidade'])) 
	{
		$nome = $_POST['nome'];
		$produto = $_POST['produto'];
		$preco = $_POST['preco'];
		$quantidade = $_POST['quantidade'];
		$opcao = $_POST['opcao'];
		$dinheiro = $_POST['dinheiro'];
		$debito = $_POST['debito'];
		$x3 = $_POST['x3'];
		$x5 = $_POST['x5'];

		$total = $preco * $quantidade;

		if ($opcao = $dinheiro)
		{
			$desconto = $total * 0.05;
			$juros = 0;
		}

		elseif ($opcao = $debito)
		{
			$desconto = $total;
			$juros = 0;
		}

		elseif ($opcao = $x3)
		{
			$juros = $total * 0.02;
			$desconto = 0;
		}

		elseif ($opcao = $x5)
		{
			$juros = $total * 0.05;
			$desconto = 0;
		}

		$total + $juros + $descontos = $total1;

		echo "<p>O total ficou R$ $total1</p>";
	}

	else

	{
		echo "<p>Falta de dados</p>";
	}
?>