<?php
	
	session_start();
	
	

	define('INCLUDE_PATH','http://localhost/site/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

	define('INCLUDE_PATHe','http://localhost/Projeto_Chamado_engSoft/');
	define('INCLUDE_PATH_PAINELe',INCLUDE_PATHe.'Conexao/');
	//Conectar com banco de dados
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'projeto_chamado');

	//Funções

	//Painel.php
	class Painel {
    	public static function logado() {
        	return isset($_SESSION['login']) ? true : false;
    	}

    	public static function loggout(){
    		session_destroy();
    		header('Location: '.INCLUDE_PATHe);
    	}
	}
	
	

?>

