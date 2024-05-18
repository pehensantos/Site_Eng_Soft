<?php

	include('../Configuracao/config.php');
	include('../Conexao/MySql.php');


	if(Painel::logadoAdm() == false){
		include('login_adm.php');
	}else{
		include('main_adm.php');
	}

?>