<?php
	require 'run.php';
	$pessoa = new Pessoa();
	$dados = $pessoa->getAll();
?>
<html>
	<?php require './layouts/head.php' ?>

	<style type="text/css">
		.botao{
			margin-bottom: 30px;
		}
		.botao a{
			text-decoration: none;
			background-color: blue;
			padding: 10px 10px;
			color: #fff;
			border-radius: 10px;
		}
	</style>

	<body>
		<div class="botao">
			<a href="pessoa_adicionar.php">Adicionar Registro</a>
		</div>
		<table>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Idade</th>
					<th>Sexo</th>
					<th>Endereço</th>
					<th>#</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($dados as $item): ?>
					<tr>
						<td><?php echo $item['nome']; ?></td>
						<td><?php echo $item['idade']; ?></td>
						<td><?php echo ($item['sexo']=="M")?"Masculino":"Feminino"; ?></td>
						<td><?php echo $item['endereco']; ?></td>
						<td>
							<a href="pessoa_editar.php?id_pessoa=<?php echo $item['id_pessoa']; ?>">
								Editar
							</a>
						</td>
						<td>
							<a href="PessoaExcluir.php?id_pessoa=<?php echo $item['id_pessoa']; ?>" onclick="return confirm('Deseja remover esse registro?')">
								Excluir
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>