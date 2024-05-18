<?php

	include('../Configuracao/config.php');
	include('../Conexao/MySql.php');


	if(Painel::logado() == false){
		include('login.php');
	}else{
		include('main.php');
	}

?>