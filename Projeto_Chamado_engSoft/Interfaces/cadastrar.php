<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .container {
        	margin-top: 10%;
            max-width: 500px; /* Define a largura máxima do conteúdo */
            width: 100%;
            padding: 20px;
            box-sizing: border-box; /* Inclui padding e border na largura total */
            margin: 0 auto; /* Centraliza horizontalmente */
        }
        form {
            text-align: center; /* Centraliza o conteúdo do formulário */
        }
        input[type="text"] {
            width: calc(100% - 20px); /* Faz com que os inputs ocupem toda a largura disponível, subtraindo o espaçamento */
            box-sizing: border-box; /* Inclui padding e border na largura total */
            margin-bottom: 10px; /* Espaçamento entre os inputs */
            padding: 10px; /* Adiciona um espaçamento interno aos inputs */
        }
        input[type="submit"] {
            width: 30%; /* Define a largura do botão */
            float: right; /* Alinha o botão à direita */
            box-sizing: border-box; /* Inclui padding e border na largura total */
            margin-bottom: 10px; /* Espaçamento entre os inputs */
            padding: 10px; /* Adiciona um espaçamento interno ao botão */
            margin-right: 2%;
        }
    </style>

</head>

<body>
	<?php
		include '../Conexao/MySql.php';
		if (isset($_POST['enviar'])) {
			try {
				$nome = $_POST['nome'];
				$ra = $_POST['ra'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$sql = MySsql::conectar()->prepare("INSERT INTO tb_usuarios (nome, user, email, password) VALUES (?, ?, ?, ?)");
				$sql->execute(array($nome,$ra,$email,$password));

				header('location: '.'http://localhost/Projeto_Chamado_engSoft/registro_bem_sucedido.html'); //Envia para uma url
				die();
			} catch (Exception $e) {
				echo '<div class="erro-box">Conexão Falhou!</div>';
			}
		}		
		
	?>



	<div>
		<a href="http://localhost/Projeto_Chamado_engSoft/Interfaces/" style="margin-left: 20%; position: absolute;"><p><h3>Voltar</h3></p></a>
	</div>
    <div class="container">

        <form method="post">
            Nome: <input type="text" name="nome"><br>
            RA: <input type="text" name="ra"><br>
            Email: <input type="text" name="email"><br>
            Senha: <input type="text" name="password"><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>    
    </div>
</body>
</html>
