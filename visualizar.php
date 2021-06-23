<?php
	session_start();
	
	
	echo "Nome: ". $_SESSION['nome'];
	echo "<br> Telefone: ". $_SESSION['telefone'];
	session_unset();
	session_destroy();

?>
<br>
<a href="formulario.html"> Cadastrar novamente </a>