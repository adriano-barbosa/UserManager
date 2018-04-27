<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login de Usuários">
    <meta name="author" content="Adriano Barbosa">
    <link rel="icon" href="imagens/favicon.ico">

    <title>User Manager</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <?php
    //destrói a sessão toda vez que o usuário loga
      unset($_SESSION['usuarioId'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioNivelAcesso'],
            $_SESSION['usuarioLogin'],
            $_SESSION['usuarioSenha']);
    ?>

    <div class="container">

      <form class="form-signin" method="POST" action="valida_login.php">
        <h2 class="form-signin-heading text-center">Área para Usuários Cadastrados</h2>

        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Seu usuário" required autofocus>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Sua senha" required><br />        

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Esqueci minha senha
          </label>
        </div>

      </form>

      <p class="text-center text-danger"><?php if(isset($_SESSION['loginErro'])) { echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']); } ?></p>

    </div>

    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
