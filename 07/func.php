<?php 
// arquivo de funções

// função para verificar o envio do formulário
function VerificarEnvio()
{
	if(isset($_POST['cadastrar']))
	{
		// chamar a função que verifica se os campos estão em branco:
		VerificarCampos();
	}
}

// função para verificar se algum campo do formulário está vazio
function VerificarCampos()
{
	if(empty($_POST['titulo'])  || empty($_POST['genero']) ||
	   empty($_POST['estudio']) || empty($_POST['ano']) )
	{
		echo "<h3>Por favor, preencha todos os campos!</h3>";
	}
	else
	{
		// armazenar campos do form em suas respectivas variáveis
		
		
		$jogo['Titulo']	 = $_POST['titulo'];
		$jogo['Gênero']	 = $_POST['genero'];
		$jogo['Estúdio'] = $_POST['estudio'];
		$jogo['Ano']	 = $_POST['ano'];

		/*echo "<pre>";
		print_r($jogo);
		echo "</pre>";*/

		echo '<h3>Jogo Cadastrado:</h3>';
		// laço de repetição para percorrer o array 'jogo':
		foreach ($jogo as $indice => $valor) 
		{
			echo '<span>' . $indice . ':</span> '  . $valor . '<br>';
		}

		echo '<span>Idade do Jogo:</span> '.CalcularIdadeJogo($jogo['Ano']).' anos <br>';


		/*echo '<h3>Jogo Cadastrado:</h3>';
		echo '<p>';
		echo '<span>Título:</span> '  . $jogo['Titulo'] . '<br>';
		echo '<span>Gênero:</span> '  . $jogo['Gênero'] . '<br>';
		echo '<span>Estúdio:</span> ' . $jogo['Estúdio'] . '<br>';
		echo '<span>Ano:</span> ' 	  . $jogo['Ano']     . '<br>';
		echo '<span>Idade do Jogo:</span> ' .  CalcularIdadeJogo($jogo['Ano'])    . ' anos <br>';
		echo '</p>';*/
	}
}

function Titulo()
{
	$titulo = "Aula 08 - Home Plus";
	return $titulo;
}

function CalcularIdadeJogo($ano)
{
	$idade = 2020 - $ano;
	return $idade;
}

?>