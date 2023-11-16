<?php

	$id_pessoa = $_GET['id_pessoa'];

	if(isset($id_pessoa) && !empty($id_pessoa)){
		require 'run.php';

		$pessoa = new Pessoa();
		$pessoa->excluir($id_pessoa);
	}	

	header("Location: index.php");
	exit;