<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ferramentas do User Manager">
    <meta name="author" content="Adriano Barbosa">
    <link rel="icon" href="imagens/favicon.ico">

    <title>UM: Menu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <?php
    include_once("menu_admin.php");
  ?>

  <body role="document">
      <!-- Início Barra de Navegação -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="login.php">User Manager</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="admin.php?link=2">Listar Usuários</a></li>
                  <li><a href="admin.php?link=3">Cadastrar Usuário</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="admin.php?link=6">Sobre o User Manager</a></li>
                  <li><a href="sair.php">Sair</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- Fim da Barra de Navegação -->
        </div>
      </nav>
    </body>
  </html>