<?php
	
	ob_start();

	if(($_SESSION['usuarioId']) == "" || ($_SESSION['usuarioNome']) == "" || ($_SESSION['usuarioNivelAcesso']) == "" || 
		($_SESSION['usuarioLogin']) == "" || ($_SESSION['usuarioSenha']) == "") {
		//destrói a sessão toda vez que o usuário loga
	      unset($_SESSION['usuarioId'],
	            $_SESSION['usuarioNome'],
	            $_SESSION['usuarioNivelAcesso'],
	            $_SESSION['usuarioLogin'],
	            $_SESSION['usuarioSenha']);
		//Informa que a sessão é somente para usuários logados
		$_SESSION['loginErro'] = "Área restrita para usuários cadastrados.";
		//Manda o usuário para a página administrativa
			header("Location: login.php");
	}

?>