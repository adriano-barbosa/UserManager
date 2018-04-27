<?php 

	session_start();
	session_destroy(); 	//destrói a sessão

	//remove todas as informações que estão contidas nas variáveis globais
	unset($_SESSION['usuarioId'],
	            $_SESSION['usuarioNome'],
	            $_SESSION['usuarioNivelAcesso'],
	            $_SESSION['usuarioLogin'],
	            $_SESSION['usuarioSenha']);

	//Manda o usuário para a tela de login
	header("Location: login.php");

?>