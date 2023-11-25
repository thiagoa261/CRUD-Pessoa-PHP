<?php
	require 'run.php';
	$pessoa = new Pessoa();
	$dados = $pessoa->getAll();
?>

	<?php require './layouts/head.php'; ?>

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
		.imagem{
			width: 100%;
			max-width: 150px;
			border-radius: 20px
		}
	</style>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="botao">
					<a href="pessoa_adicionar.php" class="btn btn-success">Adicionar Registro</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<table class="table">
					<thead>
						<tr>
							<th>Imagem</th>
							<th>Nome</th>
							<th>Idade</th>
							<th>Sexo</th>
							<th>Endereço</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($dados as $item): ?>
							<tr>
								<td>
									<?php if(!empty($item['url_foto'])): ?>
										<img src="<?php echo 'media/'.$item['url_foto']; ?>" class="imagem">
									<?php else: ?>
										<img src="media/default.jpg" class="imagem">
									<?php endif; ?>
								</td>
								<td><?php echo $item['nome']; ?></td>
								<td><?php echo $item['idade']; ?></td>
								<td><?php echo ($item['sexo']=="M")?"Masculino":"Feminino"; ?></td>
								<td><?php echo $item['endereco']; ?></td>
								<td>
									<a href="pessoa_editar.php?id_pessoa=<?php echo $item['id_pessoa']; ?>" class="btn btn-warning">
										Editar
									</a>
								</td>
								<td>
									<a href="PessoaExcluir.php?id_pessoa=<?php echo $item['id_pessoa']; ?>" onclick="return confirm('Deseja excluir esse registr?');" class="btn btn-danger">
										Excluir
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php require './layouts/footer.php'; ?>
