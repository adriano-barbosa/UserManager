<?php

	session_start();
	$usuario_um = $_POST['usuario'];
	$senha_um = $_POST['senha'];

	//echo $usuario_um . ' - ' . $senha_um;

	include_once("conexao.php");

	$result = mysqli_query($conectar, "SELECT * FROM usuarios WHERE login = '$usuario_um' 
		AND senha = '$senha_um' LIMIT 1");

	$resultado = mysqli_fetch_assoc($result);

	echo "<br />Usuário: <strong>" . $resultado['nome'];

	if(empty($resultado)){
		//Mensagem de erro
		$_SESSION['loginErro'] = "Usuário ou senha inválido.";

		//Manda o usuário para a tela de login
		header("Location: login.php");
	} else {

		$_SESSION['usuarioId'] 			= $resultado['id'];
		$_SESSION['usuarioNome'] 		= $resultado['nome'];
		$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
		$_SESSION['usuarioLogin'] 		= $resultado['login'];
		$_SESSION['usuarioSenha'] 		= $resultado['senha'];

		if($_SESSION['usuarioNivelAcesso'] == 1) {
			//Manda o usuário para a página administrativa
			header("Location: admin.php");
		} else {
			//Manda o usuário para a página de usuário
			header("Location: user.php");
		}
		
	}

?>