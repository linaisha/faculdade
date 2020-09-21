<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade Avaliativa PHP 02</title>
</head>
<body>

	<h1>Atividade Avaliatiativa PHP 02 - Home</h1>

	<form action="index.php" method="post">
		 <p>
		 <label>Selecione o tipo de venda:</label><br>
		 <select name="opcao2">
			<option value="Eletronicos">Eletrônicos</option>
			<option value="Vestuario">Vestuário</option>
			<option value="Alimentos">Alimentos</option>
		 </select>
		 </p>
		 <p><button type="submit" name="iniciar">Iniciar</button></p>
	</form>

	<?php 

	if(isset($_POST['iniciar']))
	{
		$opcao2 = $_POST['opcao2'];

		echo "<h3>Sistemas de Vendas - Vendas de $opcao2</h3>";

		include 'formularionome.php';
	}
	?>

</body>
</html>