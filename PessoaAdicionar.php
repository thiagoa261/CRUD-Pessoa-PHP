<?php
	
	$nome     = $_POST['nome'];
	$idade    = intval($_POST['idade']);
	$sexo     = $_POST['sexo'];
	$endereco = $_POST['endereco'];

	if(isset($_POST['nome'])){
		require 'run.php';
		$pessoa = new Pessoa();
		$id_pessoa = $pessoa->adicionar($nome,$idade,$sexo,$endereco);
	}	

	if(isset($_FILES['foto']['name']) && !empty($_FILES['foto']['name'])){

		$extensao = pathinfo($_FILES['foto']['tmp_name'],PATHINFO_EXTENSION);
		$arquivo  = md5(date('Ymdhis').rand(111,999)).'.'.$extensao;
		
		copy($_FILES['foto']['tmp_name'],'media/'.$arquivo);

		$pessoa->imagem($id_pessoa, $arquivo);
	}

	header("Location: index.php");
	exit;