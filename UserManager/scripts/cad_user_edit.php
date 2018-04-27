<?php 
	session_start();
	include_once("../security.php");
	include_once("../conexao.php");

	$id 	      = $_POST["id"];
	$nome 	      = $_POST["nome"];
	$sobrenome    = $_POST["sobrenome"];
	$email	      = $_POST["email"];
	$login        = $_POST["login"];
	$senha        = $_POST["senha"];
	$nivel_acesso_id = $_POST["acesso"];

	mysqli_query($conectar, " UPDATE usuarios set nome='$nome', sobrenome='$sobrenome', email='$email', login='$login', 
		senha='$senha', nivel_acesso_id='$acesso', alterado_em = NOW() WHERE id='$id' ");
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
						alert(\"Usuário alterado com sucesso!\");
					</script>
				";			
			} else { // devolve para o index caso não valide o usuário e senha
					echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0,URL=
					http://localhost/UserManager/admin.php?link=2'>
					<script type=\"text/javascript\">
						alert(\"Usuário não foi alterado!\");
					</script>
				";
			}
		?>

	</body>
</html>