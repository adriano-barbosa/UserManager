<!--<?php
	session_start();
	include_once("security.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Painel com os usuários cadastrados">
    <meta name="author" content="Adriano Barbosa">
    <link rel="icon" href="imagens/favicon.ico">

    <title>UM: Cadastro de Usuário</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <?php
  	include_once("menu_admin.php");
  ?>

  <body role="document"><br/><br/>-->
  
<?php  
  $id = $_GET['id'];  
  $consulta = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1"); //Executa Consulta
  $resultado = mysqli_fetch_assoc($consulta);
?>

<div class="container theme-showcase" role="main">
	<div class = "page-header">
		<h1>Visualizar usuário</h1>
	</div>

	<div class="row">
		<div class="pull-right">
			<a href='admin.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			<a href='admin.php?link=4&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Editar</button></a>
			<a href='scripts/cad_user_delete.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Excluir</button></a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="col-sm-1 col-md-1"> 
				<strong>Id:</strong>
			</div>
			<div class="col-xs-9 col-md-11">
				<?php echo $resultado['id']; ?>
			</div>

			<div class="col-sm-3 col-md-1"> 
				<strong>Nome:</strong>
			</div>
			<div class="col-xs-9 col-md-11">
				<?php echo $resultado['nome']; ?>
			</div>

			<div class="col-sm-3 col-md-1"> 
				<strong>Sobrenome:</strong>
			</div>
			<div class="col-xs-9 col-md-11">
				<?php echo $resultado['sobrenome']; ?>
			</div>

			<div class="col-sm-3 col-md-1"> 
				<strong>E-mail:</strong>
			</div>
			<div class="col-xs-9 col-md-11">
				<?php echo $resultado['email']; ?>
			</div>

			<div class="col-sm-3 col-md-1"> 
				<strong>Login:</strong>
			</div>
			<div class = "col-xs-9 col-md-11">
				<?php echo $resultado['login']; ?>
			</div>

			<div class="col-sm-3 col-md-1"> 
				<strong>Nível de Acesso:</strong>
			</div>
			<div class="col-xs-9 col-md-11">
				<?php echo $resultado['nivel_acesso_id']; ?>
			</div>
		<div>
	</div>
</div> <!-- Fim Container -->


<!--    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>-->
