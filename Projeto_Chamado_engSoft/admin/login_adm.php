<!DOCTYPE html>
<html>
<head>
	<title>Login admd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo INCLUDE_PATH_PAINEL ?>CSS/style.css" rel="stylesheet" >

	
	
</head>
<body>

	<div class="box-login">
		<?php
			if (isset($_POST['acao'])) {
				$log = $_POST['log'];
				$password = $_POST['password'];
				$sql = MySsql::conectar()->prepare("SELECT * FROM `tb_admin` WHERE login = ? AND senha = ?");
				$sql->execute(array($log,$password));
				$result = $sql->fetchALL();
				if(count($result) == 1){
					$info = $result[0];
					//Logamos com sucesso.
					$_SESSION['loginAdm'] = true;
					$_SESSION['ra'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['cargo'] = $info['cargo'];
					$_SESSION['nome'] = $info['nome'];
					$_SESSION['img'] = $info['img'];
					header('location: '.'http://localhost/Projeto_Chamado_engSoft/admin/'); //Envia para uma url
					die();
				}else{
					//Falhou
					echo '<div class="erro-box">Usuário ou senha incorretos!</div>';
				}
			}
		?>
		<h2>Administrador</h2>
		<form method="post">
			<input type="text" name="log" placeholder="RA" required>
			<input type="password" name="password" placeholder="Senha" required>
			<input type="submit" name="acao" value="Logar!">
		</form>

	</div><!--box-login-->

</body>
</html>