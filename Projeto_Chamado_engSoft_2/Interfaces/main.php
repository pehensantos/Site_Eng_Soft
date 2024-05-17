<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Usuário</title>

	<script language="JavaScript">
		function chamarRegistro(){	
			window.location.href='http://localhost/Projeto_Chamado_engSoft/Interfaces/registrar_chamado.php'; //redireciona
		}
	
	</script>

	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 10%;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 600px; /* Define a largura máxima do conteúdo */
			width: 100%;
			padding: 20px;
			box-sizing: border-box; /* Inclui padding e border na largura total */
		}
		.center {
			text-align: center;
		}
		.loggout {
			position: fixed;
			top: 10px;
			right: 25%;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php
		if(isset($_GET['loggout'])){
			Painel::loggout();
		}
		?>
		<header>
			<div class="center">
				<div class="loggout">
					<a href="<?php echo INCLUDE_PATHe.'Interfaces' ?>?loggout">Sair<i class="fa-solid fa-house"></i></a>
				</div><!--loggout-->
				<div class="clear"></div>
				<input type="button" name="registrar_chamado" value="Registrar chamado" style="width: 200px; height: 200px;" onclick="chamarRegistro()">
				<input type="button" name="acompanhar_chamado" value="Acompanhar chamado" style="width: 200px; height: 200px;">
				<form action="" method="post">
            		<input type="submit" name="retornar" value="Usuários logados no sistema" style="width: 200px; height: 200px;">
            		<input type="submit" name="retornar" value="Mais alguma função" style="width: 200px; height: 200px;">
		            <?php
		                if(isset($_POST['retornar'])) {
		                    include '../Classes/classes.php';
							$u = $Sistema->listaUsuarios();
							$string = implode(', ', $u);
							echo $string;
		                    echo "<h1>Código PHP executado ao clicar no botão 'Retornar'</h1>";
		                }
		            ?>
			</div>
		</header>
	</div>
</body>
</html>
