<?php

	include '../Conexao/MySql.php';


// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	try{
	    // Recupera os dados do formulário
	    $tema = $_POST['tema'];
	    $reclamacao = $_POST['reclamacao'];
	    $data = $_POST['data'];
	    $area = $_POST['areas'];
	    $status_chamado = "pendente";


		$sql = MySsql::conectar()->prepare("INSERT INTO tb_chamados (tema_chamado, assunto_chamado, data_chamado, area_chamado, status_chamado) VALUES (?, ?, ?, ?, ?)");
		$sql->execute(array($tema,$reclamacao,$data,$area,$status_chamado));

		header('location: '.'http://localhost/Projeto_Chamado_engSoft/Processos/reclamacao_enviada.html'); //Envia para uma url
		die();
	}catch (Exception $e){
		echo '<div class="erro-box">Usuário ou senha incorretos!</div>';
	}
}

    // Se o formulário não foi submetido via POST, redireciona o usuário de volta para o formulário
    //header("Location: formulario_reclamacao.php");
    //exit();

?>