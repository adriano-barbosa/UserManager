<!--<?php
	session_start();
	include_once("security.php");
	include_once("conexao.php");
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

    <title>UM: Painel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <?php
  	//include_once("menu_admin.php");
  	$resultado = mysqli_query($conectar, "SELECT * FROM usuarios ORDER BY 'id'");
  	$linhas = mysqli_num_rows($resultado);
  ?>

  <body role="document"><br/><br/>-->

    <div class="container theme-showcase" role="main">      
      <div class="row">
        <div class="col-md-12">
      <div class="page-header">
        <h1>Painel de Usuários</h1>      
          </div>          
          </div>
        </div><!-- /.col-md-12 -->
        <div class="col-md-12">
          <div class="panel panel-success">
	            <div class="panel-heading">
	              <h3 class="panel-title">Usuários Cadastrados</h3>
	            </div>
            <div class="panel-body">
	              <table class="table">
	            <thead>
	              <tr>
	                <th>Id</th>
	                <th>Nome</th>
	                <th>Login</th>
	                <th>E-mail</th>
	                <th>Nível de Acesso</th>
	                <th>Data de Criação</th>
	                <th>Ações</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	              	<?php 
	              		while($linhas = mysqli_fetch_array($resultado)) {
	              			echo "<tr>";
	              			echo "<td>" . $linhas['id'] . "</td>";
	              			echo "<td>" . $linhas['nome'] . "</td>";
	              			echo "<td>" . $linhas['login'] . "</td>";
	              			echo "<td>" . $linhas['email'] . "</td>";
	              			echo "<td>" . $linhas['nivel_acesso_id'] . "</td>";
	              			echo "<td>" . $linhas['criado_em'] . "</td>";
	              			?><td> 
	              				<a href='admin.php?link=5&id=<?php echo $linhas['id']; ?>''><button type='button' class='btn btn-sm btn-info'>Visualizar</button></a>
	              				<a href='admin.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Editar</button></a>
	              				<a href='scripts/cad_user_delete.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Excluir</button></a>
	              				  <?php
	              			echo "</tr>";
	              		}
	              	?>
	              </tr>
	              
	            </tbody>
	          </table>
            </div>                  
          </div>
        </div><!-- Fim col-md-12 -->
      </div>
    </div> <!-- Fim container -->

<!--    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>-->
