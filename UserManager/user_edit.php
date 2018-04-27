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
      <div class="row">
        <div class="col-md-12">
      <div class="page-header">
        <h3>Não esqueça de salvar as alterações</h3>      
          </div>          
          </div>
        </div><!-- /.col-md-12 -->
        
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h1 class="panel-title">Edição de Usuário</h1>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="scripts/cad_user_edit.php">
                <fieldset>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Nome">Nome</label>  
                      <div class="col-md-5">
                      <input id="fnome" name="nome" type="text" placeholder="Seu nome" 
                      value="<?php echo $resultado['nome'];?>" class="form-control input-md" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Login">Sobrenome</label>  
                      <div class="col-md-4">
                      <input id="fsobrenome" name="sobrenome" type="text" placeholder="Seu sobrenome" value="<?php echo $resultado['sobrenome'];?>" class="form-control input-md" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="E-mail">E-mail</label>  
                      <div class="col-md-4">
                      <input id="femail" name="email" type="e-mail" placeholder="Seu e-mail" value="<?php echo $resultado['email'];?>" class="form-control input-md" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Login">Login</label>
                      <div class="col-md-4">
                        <input id="flogin" name="login" type="text" placeholder="Usuário de acesso ao UM" value="<?php echo $resultado['login'];?>" class="form-control input-md" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Senha">Senha</label>
                      <div class="col-md-4">
                        <input id="fsenha" name="senha" type="password" placeholder="Mínimo 8 caracteres" class="form-control input-md" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="Acesso">Nível de Acesso</label>
                      <div class="col-md-4">
                        <select class="form-control" name="acesso">
                          <option>Selecione</option>
                          <option value="1" <?php if($resultado['nivel_acesso_id'] == 1) { echo 'selected'; }
                           ?>
                          >Admin</option>
                          <option value="2"  <?php if($resultado['nivel_acesso_id'] == 2) { echo 'selected'; }
                           ?> >Usuário</option>
                        </select>
                      </div>
                    </div>

                    <input type="hidden" name="id" value=" <?php echo $resultado['id']; ?> ">

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="singlebutton"></label>
                      <div class="col-md-4">
                        <button id="fsinglebutton" name="singlebutton" class="btn btn-primary">Salvar alterações</button>
                      </div>
                    </div>
                </fieldset>
              </form>
            </div>
          </div>        
        </div>
      </div>
    </div> <!-- Fim container -->

<!--    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>-->
