<?php

	//Faz a conexão com o banco de dados
	$conectar =  mysqli_connect("localhost","root","", "user_manager");

	//Exibe falha se a conexão estiver incorreta.
	if(mysqli_connect_errno()) {
		printf("Falha ao conectar: %s\n", mysqli_connect_error());	
		exit();
	}

	//Imprime o banco de dados utilizado.
	/*if($result = mysqli_query($conectar, "SELECT DATABASE()")) {
		$linha = mysqli_fetch_row($result);
		printf("<br />O banco de dados padrão é %s.\n <br />", $linha[0]);
		mysqli_free_result($result);
	}*/

?>