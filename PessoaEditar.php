<?php
	
	$id_pessoa = $_GET['id_pessoa'];
	$nome     = $_POST['nome'];
	$idade    = intval($_POST['idade']);
	$sexo     = $_POST['sexo'];
	$endereco = $_POST['endereco'];

	require 'run.php';
	$pessoa = new Pessoa();

	if(isset($id_pessoa) && !empty($id_pessoa)){
		$pessoa->editar($id_pessoa, $nome,$idade,$sexo,$endereco);
	}	

	if(isset($_FILES['foto']['name']) && !empty($_FILES['foto']['name'])){

		$extensao = pathinfo($_FILES['foto']['tmp_name'],PATHINFO_EXTENSION);
		$arquivo  = md5(date('Ymdhis').rand(111,999)).'.'.$extensao;
		
		copy($_FILES['foto']['tmp_name'],'media/'.$arquivo);

		$pessoa->imagem($id_pessoa, $arquivo);
	}

	header("Location: index.php");
	exit;