<?php

	include('../Configuracao/config.php');


	if(Painel::logado() == false){
		include('login.php');
	}else{
		include('main.php');
	}

?>