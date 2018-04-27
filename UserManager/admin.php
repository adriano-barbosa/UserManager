<?php 
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
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Adriano Barbosa">
    <link rel="icon" href="imagens/favicon.ico">

    <title>UM: Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body role="document"><br/><br/>

    <?php
      include_once("menu_admin.php");      

      if (isset($_GET['link'])) { //verifica se a varíavel link está setada
        $link = $_GET['link'];
      }

      $pag[1] = "bem_vindo.php";
      $pag[2] = "user_list.php";
      $pag[3] = "user_cad.php";
      $pag[4] = "user_edit.php";
      $pag[5] = "user_view.php";
      $pag[6] = "sobre_um.php";

      if(!empty($link)){ //exibe a página no array se a variável não estiver vazia e existir o arquivo
        if(file_exists($pag[$link])){
          include $pag[$link];
        }else{
          include "bem_vindo.php";
        }
      }else{
        include "bem_vindo.php";
      }

    ?>

    <!--<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1><p>Bem vindo à página administrativa do User Manager</p></h1>
      </div>
    </div>-->

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
