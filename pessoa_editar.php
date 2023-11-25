<?php
	require 'run.php';
	$pessoa = new Pessoa();
	$dados = $pessoa->get($_GET['id_pessoa']);
?>

<?php require './layouts/head.php'; ?>

<style type="text/css">
	.botao{
		margin-top: 20px;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">

			<form method="POST" action="PessoaEditar.php?id_pessoa=<?php echo $dados['id_pessoa']; ?>" enctype="multipart/form-data">

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="nome">Nome</label>
						<input type="text" name="nome" required placeholder="Digite seu nome" value="<?php echo $dados['nome']; ?>" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="idade">Idade</label>
						<input type="number" name="idade" required placeholder="Digite sua idade" min="18" max="105" value="<?php echo $dados['idade']; ?>" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="sexo">Sexo</label>
						<select name="sexo" required class="form-control">
							<option value="">Selecione</option>
							<option value="M" <?php echo ($dados['sexo']=="M")?'selected':null; ?>>Masculino</option>
							<option value="F"<?php echo ($dados['sexo']=="F")?'selected':null; ?>>Feminino</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="nome">Endereço</label>
						<input type="text" name="endereco" required placeholder="Digite seu endereco" value="<?php echo $dados['endereco']; ?>" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="foto">Imagem de Perfil</label>
						<input type="file" name="foto" id="foto" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<div class="btn-group botao">
							<a href="index.php" class="btn btn-warning">Voltar</a>
							<button type="submit" class="btn btn-success">Salvar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php require './layouts/footer.php'; ?>