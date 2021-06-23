<?php

	session_start();
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];

	$_SESSION['nome'] = $nome;
	$_SESSION['telefone'] = $telefone;
?>

<a href="visualizar.php"> Clique aqui para visualizar </a>