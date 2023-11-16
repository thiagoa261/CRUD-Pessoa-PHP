<html>
	<?php require './layouts/head.php' ?>	

	<style type="text/css">
		.botao{
			margin-top: 20px;
		}
	</style>
	
	<body>
		<form method="POST" action="PessoaAdicionar.php">
			<input type="text" name="nome" required placeholder="Digite seu nome">
			<input type="number" name="idade" required placeholder="Digite sua idade" min="18" max="105">
			<select name="sexo" required>
				<option value="">Selecione</option>
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
			</select>
			<input type="text" name="endereco" required placeholder="Digite seu endereco">

			<div class="botao">
				<a href="index.php">Voltar</a>
				<button type="submit">Salvar</button>
			</div>
		</form>
	</body>
</html>