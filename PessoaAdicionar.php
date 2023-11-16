<?php
	
	$nome     = $_POST['nome'];
	$idade    = intval($_POST['idade']);
	$sexo     = $_POST['sexo'];
	$endereco = $_POST['endereco'];

	if(isset($_POST['nome'])){
		require 'run.php';
		$pessoa = new Pessoa();
		$pessoa->adicionar($nome,$idade,$sexo,$endereco);
	}	

	header("Location: index.php");
	exit;