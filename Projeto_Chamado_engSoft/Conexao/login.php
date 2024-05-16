<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo INCLUDE_PATH_PAINEL ?>CSS/style.css" rel="stylesheet" >

	<script language="JavaScript">
		function funcaoCadastrar(){
			window.location.href='http://localhost/Projeto_Chamado_engSoft/cadastrar.php'; //redireciona
		}

	</script>
	
	
</head>
<body>

	<div class="box-login">
		<?php
			if (isset($_POST['acao'])) {
				$user = $_POST['user'];
				$password = $_POST['password'];
				$sql = MySsql::conectar()->prepare("SELECT * FROM `tb_usuarios` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				$result = $sql->fetchALL();
				if(count($result) == 1){
					$info = $result[0];
					//Logamos com sucesso.
					$_SESSION['login'] = true;
					$_SESSION['ra'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['cargo'] = $info['cargo'];
					$_SESSION['nome'] = $info['nome'];
					$_SESSION['img'] = $info['img'];
					header('location: '.'http://localhost/Projeto_Chamado_engSoft/Conexao'); //Envia para uma url
					die();
				}else{
					//Falhou
					echo '<div class="erro-box">Usuário ou senha incorretos!</div>';
				}
			}
		?>
		<h2>Efetue o login:</h2>
		<form method="post">
			<input type="text" name="user" placeholder="RA" required>
			<input type="password" name="password" placeholder="Senha" required>
			<input type="submit" name="acao" value="Logar!">
			<br><input type="button" name="cadastrar" value="Cadastre-se" style="width: 30%; margin-left: 70%" onclick="funcaoCadastrar();">
		</form>

	</div><!--box-login-->

</body>
</html>