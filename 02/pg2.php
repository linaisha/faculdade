<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 02 - Página 02</title>
</head>
<body>

	<h1>Página Pessoal - Página 02</h1>

	<a href="index.php">Voltar para home</a>

	<h2>Dados do autor:</h2>
	<p>
		
		<?php 

		// comentario de linha simples
		/* coomentario de multiplas linhas */

		// declaração de variáveis
		$nome = "Elisa de Oliveira Martins";
		// variável 'nome' recebe string 'Elisa Martins'
		$idade = 21; // inteiro (int)
		$altura = 1.53; // real (float)

		// comando para verificar o tipo e o valor de uma variavel
		// var_dump($altura); // comando apenas para fins de teste

		// saída de dados (comando echo)
		// echo $nome; // mostrar valor contido na variável '$nome'

		echo "<b>Nome :</b> $nome <br>"; // interpolação de variável
		echo "<b>Idade : </b>" . $idade . "<br>"; // concatenação de variável
			echo "<b>Altura: </b>" . $altura . " m";



		?>

	</p>
</body>
</html>