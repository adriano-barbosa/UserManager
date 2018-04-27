<?php
	
	session_start();

	include_once("security.php");

	echo "Seja bem vindo ao User Manager, <br />Usuário: <strong>" . $_SESSION['usuarioNome'];

?>
<br />
<a href="sair.php">Sair</a>