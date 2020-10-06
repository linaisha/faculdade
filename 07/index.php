<?php include_once 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title><?php echo Titulo() ?></title>
</head>
<body>

	<h1>Aula 08 - Home</h1>

	<h3>Cadastro de Jogos</h3>

	<form action="index.php" method="post">
		
		<p>
			<label for="titulo">Título:</label><br>
			<input type="text" name="titulo" id="titulo" maxlength="100" class="fields">
		</p>

		<p>
			<label for="genero">Gênero:</label><br>
			<input type="text" name="genero" id="genero" maxlength="80" class="fields">
		</p>

		<p>
			<label for="ano">Ano:</label><br>
			<input type="number" name="ano" id="ano" min="1970" max="2021" class="fields">
		</p>

		<p>
			<label for="estudio">Estúdio:</label><br>
			<input type="text" name="estudio" id="estudio" maxlength="100" class="fields">
		</p>

		<p>
			<button type="submit" name="cadastrar" class="btn submit">Cadastrar</button> 
			<button type="reset" class="btn reset"><img src="trash.png" width="10px" height="10px"> Apagar</button>
		</p>

	</form>

	<?php 
	// chamar a função que verifica o envio do form
	VerificarEnvio();
	?>


</body>
</html>