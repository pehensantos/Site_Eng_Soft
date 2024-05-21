<?php

	include '../Conexao/MySql.php';
	error_reporting(0);

	if (Painel::logadoAdm() == false){
		include('login_adm.php');
	}else{
		include('main_adm.php');
	}

?>