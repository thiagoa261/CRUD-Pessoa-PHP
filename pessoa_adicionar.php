<?php require './layouts/head.php'; ?>

<style type="text/css">
	.botao{
		margin-top: 20px;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">

			<form method="POST" action="PessoaAdicionar.php" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" required placeholder="Digite seu nome" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="idade">Idade</label>
						<input type="number" name="idade" id="idade" required placeholder="Digite sua idade" min="18" max="105" class="form-control">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="sexo">Sexo</label>
						<select name="sexo" id="sexo" required class="form-control">
							<option value="">Selecione</option>
							<option value="M">Masculino</option>
							<option value="F">Feminino</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="nome">Endereço</label>
						<input type="text" id="endereco" name="endereco" required placeholder="Digite seu endereco" class="form-control">
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