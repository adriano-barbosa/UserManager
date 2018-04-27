<?php 
	session_start();
	include_once("../security.php");
	include_once("../conexao.php");

	$nome 	      = $_POST["nome"];
	$sobrenome    = $_POST["sobrenome"];
	$email	      = $_POST["email"];
	$login        = $_POST["login"];
	$senha        = $_POST["senha"];
	$nivel_acesso = $_POST["acesso"];

	mysqli_query($conectar, "INSERT INTO usuarios (nome, sobrenome, email, login, senha, nivel_acesso_id, criado_em)
						   VALUES('$nome', '$sobrenome', '$email', '$login', '$senha', '$nivel_acesso', NOW())");
	//printf("Usuário cadastrado (INSERT): %d\n", mysqli_affected_rows($conectar));
?>
<!DOCTYPE html>
<html lang="pt-br">
 	<head>
    	<meta charset="utf-8">
  	</head>
	<body>

		<?php
			if(mysqli_affected_rows($conectar) != 0) {
			echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0,URL=
					http://localhost/UserManager/admin.php?link=2'>
					<script type=\"text/javascript\">
						alert(\"Usuário cadastrado com sucesso!\");
					</script>
				";			
			} else { // devolve para o index caso não valide o usuário e senha
					echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0,URL=
					http://localhost/UserManager/admin.php?link=2'>
					<script type=\"text/javascript\">
						alert(\"Usuário não cadastrado!\");
					</script>
			";
			}
		?>

	</body>
</html>