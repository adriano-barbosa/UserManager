<?php 
	session_start();
	include_once("../security.php");
	include_once("../conexao.php");

	$id 	      = $_GET["id"];

	$exclui = mysqli_query($conectar, "DELETE FROM usuarios WHERE id='$id'");
	$resultado = mysqli_query($exclui);
	$linhas = mysqli_affected_rows($resultado);
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
					http://localhost/UserManager/admin.php?link='2'>
					<script type=\"text/javascript\">
						alert(\"Usuário excluído com sucesso!\");
					</script>
				";			
			} else { // devolve para o index caso não valide o usuário e senha
					echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0,URL=
					http://localhost/UserManager/admin.php?link='2'>
					<script type=\"text/javascript\">
						alert(\"Usuário não foi excluído!\");
					</script>
			";
			}
		?>

	</body>
</html>