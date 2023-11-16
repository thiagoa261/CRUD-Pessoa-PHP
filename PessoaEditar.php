<?php
	
	$id_pessoa = $_GET['id_pessoa'];
	$nome     = $_POST['nome'];
	$idade    = intval($_POST['idade']);
	$sexo     = $_POST['sexo'];
	$endereco = $_POST['endereco'];

	if(isset($id_pessoa) && !empty($id_pessoa)){
		require 'run.php';
		$pessoa = new Pessoa();
		$pessoa->editar($id_pessoa, $nome,$idade,$sexo,$endereco);
	}	

	header("Location: index.php");
	exit;