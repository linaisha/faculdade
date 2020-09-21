	<h2>Preencha alguns dados antes da compra:</h2>

	<form action="venda.php" method="post">

	<p>
		<label for="nome">Nome</label><br>
		<input type="text" name="nome" id="nome" placeholder="Nome">
	</p>

	<p>
		<label for="produto">Produto</label><br>
		<input type="text" name="nome2" id="nome2" placeholder="Produto">
	</p>

	<p>
		<label for="preço">Valor do produto</label><br>
		<input type="number" name="nome3" id="nome3" placeholder="Valor do produto" min="1" step="0.01">
	</p>

	<p>
		<label for="quantidade">Quantidade</label><br>
		<input type="number" name="nome4" id="nome4" placeholder="Quantia de produto" min="1" step="1">
	</p>
	

	<h2>Selecione a forma de pagamento:</h2>

	
		<label>Selecione uma opção:</label><br>
		<select name="opcao">
			<option value="dinheiro">A vista no dinheiro - 5% de desconto</option>
			<option value="debito">A vista no débito - sem desconto</option>
			<option value="x3">Parcelado em até 3x - 2% de juros</option>
			<option value="x5">Parcelado em até 5x - 5% de juros</option>
		</select>

		<p>
		<label for="cpf">CPF:</label><br>
		<input type="" name="cpf" id="cpf" placeholder="CPF">
		</p>

		<h5>Ganhe ainda mais desconto adicionando seu CPF!</h5>

		<p>
		<button type="submit">Enviar</button>
		<button type="reset">Apagar</button>
		</p>
	</form>