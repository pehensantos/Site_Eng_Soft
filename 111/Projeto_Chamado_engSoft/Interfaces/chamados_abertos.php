<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../CSS/style.css" rel="stylesheet" >
	<title>Chamados abertos</title>



	<style>
	    
	</style>


</head>

	

<body>


<?php 
include '../Conexao/MySql.php';

$sql = MySsql::conectar()->prepare("SELECT * FROM `tb_chamados`");
$sql->execute();
$result = $sql->fetchALL();

if ($result){
	echo '<div class="chamados-container">';

	foreach ($result as $row) {
	    echo '<div class="chamado">';
	    echo '<p class="chamado-id"><span class="label">ID do Chamado:</span> ' . $row['id_chamado'] . '</p>';
	    echo '<p class="chamado-tema"><span class="label">Tema do Chamado:</span> ' . $row['tema_chamado'] . '</p>';
	    echo '<p class="chamado-assunto"><span class="label">Assunto do Chamado:</span> ' . $row['assunto_chamado'] . '</p>';
	    echo '<p class="chamado-data"><span class="label">Data do Chamado:</span> ' . $row['data_chamado'] . '</p>';
	    echo '<p class="chamado-area"><span class="label">Área do Chamado:</span> ' . $row['area_chamado'] . '</p>';
	    echo '<p class="chamado-status"><span class="label">Status do Chamado:</span> ' . $row['status_chamado'] . '</p>';
	    echo '<p class="chamado-status"><span class="label">Resposta do Chamado:</span> ' . $row['resposta'] . '</p>';
	    echo '</div>';
	    echo '<hr class="chamado-separator">';
	}

	echo '</div>';
	die();
} else {
	echo '<p class="sem-chamado">NÃO HÁ NENHUM CHAMADO!</p>';
}

?>



</body>
</html>